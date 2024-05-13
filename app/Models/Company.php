<?php

namespace App\Models;

use App\Models\User;
use App\Models\JobPost;
use App\Models\Industry;
use App\Models\CompanyLocation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /**
     * Retrieve the associated user for the company.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function industry()
    {
        return $this->belongsTo(Industry::class,'industry_id');
    }

    public function jobs()
    {
        return $this->hasMany(JobPost::class,'company_id');
    }

    public function location()
    {
        return $this->belongsTo(CompanyLocation::class,'company_location_id');
    }

}
