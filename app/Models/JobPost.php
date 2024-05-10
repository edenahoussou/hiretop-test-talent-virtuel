<?php

namespace App\Models;

use App\Models\User;
use App\Models\Graduation;
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
        return $this->belongsTo(User::class, 'user_id');
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


    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }
}
