<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoverLetter extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'cover_letter_title',
        'cover_letter_file',
        'cover_letter_visibilty',
        'cover_letter_status',
        'cover_letter_format',
        'cover_letter_language',
        'created_at',
        'updated_at'
    ];
}
