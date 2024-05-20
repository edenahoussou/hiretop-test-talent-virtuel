<?php

namespace App\Models;

use App\Models\User;
use App\Models\Skill;
use App\Models\JobPost;
use App\Models\Graduation;
use App\Models\JobApllicant;
use App\Models\CandidatExperience;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Candidat extends Model
{
    use HasFactory,SoftDeletes;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'candidat_skill', 'candidat_id', 'skill_id');
    }

    public function graduations()
    {
        return $this->belongsToMany(Graduation::class, 'candidat_education', 'candidat_id', 'graduation_level_id')
        ->withPivot('degree', 'start_date', 'end_date','description', 'created_at','updated_at','university','degree_proof','status')
        ->withTimestamps();
    }

    public function experiences()
    {
        return $this->hasMany(CandidatExperience::class);
    }

    public function jobs()
    {
        return $this->belongsToMany(JobPost::class, 'job_post_candidates', 'candidate_id', 'job_post_id')
                    ->withPivot('created_at', 'updated_at','slug', 'candidate_status','cover_letter', 'resume', 'review','disqualification_reason','deleted_at')
                    ->using(JobApllicant::class)
                    ->withTimestamps();
    }
}
