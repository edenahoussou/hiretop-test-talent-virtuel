<?php

namespace App\Models;

use App\Models\User;
use App\Models\Skill;
use App\Models\Company;
use App\Models\Candidat;
use App\Models\Graduation;
use App\Models\JobCategory;
use Spatie\Sluggable\HasSlug;
use App\Models\ExperienceLevel;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JobPost extends Model
{
    use HasFactory, SoftDeletes, HasSlug;

    protected $guarded = ['id'];

    // cast closing_date to Carbon
    protected $casts = [
        'closing_date' => 'date',
    ];

    public function getDaysRemainingAttribute()
    {
        return $this->closing_date->diffInDays();
    }

    public function post_by()
    {
        return $this->belongsTo(User::class, 'posted_by_id');
    }

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }

    public function job_type()
    {
        return $this->belongsTo(JobType::class, 'job_type_id');
    }

    public function graduation()
    {
        return $this->belongsTo(Graduation::class, 'graduation_level_id');
    }

    public function experience()
    {
        return $this->belongsTo(ExperienceLevel::class, 'experience_level_id');
    }

    public function category()
    {
        return $this->belongsTo(JobCategory::class, 'job_category_id');
    }

    public function location()
    {
        return $this->belongsTo(CompanyLocation::class, 'location_id');
    }

    public function candidates()
    {
        return $this->belongsToMany(Candidat::class, 'job_post_candidates', 'job_post_id', 'candidate_id')
                ->withPivot('created_at', 'updated_at','slug', 'candidate_status','cover_letter', 'resume', 'review','disqualification_reason','deleted_at')
                ->using(JobApllicant::class)
                ->withTimestamps();
    }

    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'job_post_skills', 'job_post_id', 'skill_id')
                    ->withTimestamps();
    }


    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }
}
