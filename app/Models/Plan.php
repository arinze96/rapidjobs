<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = [
        'plan_name',
        'plan_description',
        'plan_feature',
        'plan_pricing',
        'currency',
        'discount',
        'renewal_options',
        'payment_id',
        'tax_included',
        'refund_policy',
        'support_options',
        'created_at',
        'updated_at'
    ];
}
