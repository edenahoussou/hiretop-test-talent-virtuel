<?php

namespace App\Models;

use Spatie\Sluggable\SlugOptions;
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

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function skills()
    {
        return $this->belongsToMany(Skill::class);
    }

    public function graduations()
    {
        return $this->belongsToMany(Graduation::class, 'candidat_education', 'candidat_id', 'graduation_level_id');
    }

    public function experiences()
    {
        return $this->hasMany(CandidatExperience::class);
    }


}
