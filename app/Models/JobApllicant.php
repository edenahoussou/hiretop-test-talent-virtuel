<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class JobApllicant extends Pivot
{
    use HasFactory;

    protected $table = 'job_post_candidates', $guarded = ['id'];

    public $incrementing = true;
}
