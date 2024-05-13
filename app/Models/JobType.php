<?php

namespace App\Models;

use App\Models\JobPost;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JobType extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function jobs()
    {
        return $this->hasMany(JobPost::class, 'job_type_id');
    }
}
