<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'subscription_open_date',
        'subscription_close_date',
        'subscription_status',
        'payment_id',
        'payment_status',
        'billing_cycle_id',
        'subscription_cost',
        'renewable_table',
        'discount_code',
        'subscription_duration',
        'subscription_benefits',
    ];
}
