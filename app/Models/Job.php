<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'plan_id',
        'title',
        'description',
        'date_posted',
        'company_name',
        'company_logo',
        'industry',
        'salary_range',
        'responsabilities',
        'application_deadline',
        'application_method',
        'application_email',
        'application_url',
        'job_status',
        'views_count',
        'number_of_applicants',
        'hiring_manager',
        'benefits',
        'company_website',
        'bannner_image',
        'created_at',
        'updated_at'
    ];
}
