<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = [
        'senders_id',
        'receipient_id',
        'notification_type',
        'notification_content',
        'timestamp',
        'read_status',
        'notification_status',
        'action_required',
        'notification_method',
        'notification_category',
        'notification_settings',
        'notification_delivery_status',
        'notification_title',
        'notification_trigger_event'
    ]; 
}
