<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;
    protected $fillable = [
        'sender_id',
        'receiver_id',
        'message_content',
        'read_status',
        'message_status',
        'attachment',
        'chat_type',
        'message_type',
        'message_length',
        'message_encryption',
        'message_deletion_status',
        'message_reaction',
        'message_indicator_status',
        'chat_session',
        'blocked_status',
        'archived_status',
        'notification_settings',
        'created_at',
        'updated_at'
    ];
}
