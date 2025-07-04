<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    public $table = 'chats';

    public $fillable = [
        'session_id',
        'customer_id',
        'agent_id',
        'message',
        'timestamp',
        'channel'
    ];

    protected $casts = [
        'message' => 'string',
        'timestamp' => 'datetime',
        'channel' => 'string'
    ];

    public static array $rules = [
        'session_id' => 'nullable',
        'customer_id' => 'nullable',
        'agent_id' => 'nullable',
        'message' => 'nullable|string|max:2000',
        'timestamp' => 'nullable',
        'channel' => 'nullable|string|max:20',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function customer(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Customer::class, 'customer_id');
    }

    public function agent(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Agent::class, 'agent_id');
    }

    public function sentimentAnalysis(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\SentimentAnalysi::class, 'interaction_id');
    }

    public function socialMediaInteractions(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\SocialMediaInteraction::class, 'interaction_id');
    }
}
