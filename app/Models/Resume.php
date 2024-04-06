<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'resume_title',
        'resume_file',
        'updated_at',
        'created_at',
        'resume_visibilty',
        'resume_status',
        'resume_format',
        'resume_language',
        'created_at',
        'updated_at'
    ];
}
