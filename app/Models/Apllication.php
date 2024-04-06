<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apllication extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'job_id',
        'application_date',
        'application_status',
        'created_at',
        'updated_at'
    ];
}
