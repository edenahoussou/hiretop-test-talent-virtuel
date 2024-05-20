<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyLocation extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function jobposts()
    {
        return $this->hasMany(JobPost::class, 'location_id');
    }

}
