<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'year',
        'role',
        'position',
        'start_date',
        'close_date',
        'created_at',
        'updated_at'
    ];
}
