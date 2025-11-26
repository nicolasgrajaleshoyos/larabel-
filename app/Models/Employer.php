<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    
    use HasFactory;

    protected $fillable = [
        'name',
        'companyEmail',
    ];

    public function job()
    {
        return $this->hasMany(Job::class,'company_id');
    }

}
