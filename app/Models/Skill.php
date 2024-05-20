<?php

namespace App\Models;

use App\Models\JobPost;
use App\Models\Candidat;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Skill extends Model
{
    use HasFactory,HasSlug;

    protected $guarded = ['id'];

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public function candidats()
    {
        return $this->belongsToMany(Candidat::class, 'candidat_skill', 'skill_id', 'candidat_id');
    }

    public function jobs()
    {
        return $this->belongsToMany(JobPost::class, 'job_post_skills', 'skill_id', 'job_post_id');
    }
}
