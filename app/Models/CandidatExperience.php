<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidatExperience extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'candidat_experience';

    public function candidat()
    {
        return $this->belongsTo(Candidat::class);
    }
}
