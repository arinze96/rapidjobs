<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'year',
        'degree_name',
        'created_at',
        'updated_at'
    ];
}

