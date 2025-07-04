<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification_setting extends Model
{
    public $table = 'notification_settings';

    public $fillable = [
        'user_id',
        'channel',
        'type',
        'is_enabled',
        'preferred_time'
    ];

    protected $casts = [
        'channel' => 'string',
        'type' => 'string',
        'is_enabled' => 'string'
    ];

    public static array $rules = [
        'user_id' => 'nullable',
        'channel' => 'nullable|string|max:20',
        'type' => 'nullable|string|max:100',
        'is_enabled' => 'nullable|string|max:100',
        'preferred_time' => 'nullable',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }
}
