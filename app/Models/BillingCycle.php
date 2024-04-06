<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillingCycle extends Model
{
    use HasFactory;

    protected $fillable = [
        'plan_id',
        'billing_cycle',
        'billing_address',
        'payment_method',
        'created_at',
        'updated_at'
    ];
}
