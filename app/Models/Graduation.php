<?php

namespace App\Models;

use App\Models\Candidat;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Graduation extends Model
{
    use HasFactory, SoftDeletes,HasSlug;

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function jobs()
    {
        return $this->hasMany(JobPost::class, 'graduation_level_id');
    }

    public function candidats()
    {
        return $this->belongsToMany(Candidat::class, 'candidat_education', 'graduation_level_id', 'candidat_id')
        ->withPivot('degree', 'start_date', 'end_date','description', 'created_at','updated_at','university','degree_proof')
        ->withTimestamps();
    }
}
