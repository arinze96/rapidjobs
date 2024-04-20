<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'subscription_id',
        'transaction_date',
        'transaction_type',
        'payment_id',
        'amount',
        'currency',
        'invoice_id',
        'transaction_description',
        'billing_cycle_id',
        'tax_amount',
        'discount_amount',
        'ip_address',
        'device_info',
        'transaction_status',
        'transaction_source',
        'plan_id',
        'created_at',
        'updated_at'
    ];
}
