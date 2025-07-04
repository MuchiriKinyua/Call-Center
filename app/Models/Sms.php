<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sms extends Model
{
    public $table = 'sms';

    public $fillable = [
        'customer_id',
        'agent_id',
        'phone_number',
        'message',
        'timestamp',
        'direction',
        'status'
    ];

    protected $casts = [
        'phone_number' => 'string',
        'message' => 'string',
        'timestamp' => 'datetime',
        'direction' => 'string',
        'status' => 'string'
    ];

    public static array $rules = [
        'customer_id' => 'nullable',
        'agent_id' => 'nullable',
        'phone_number' => 'nullable|string|max:20',
        'message' => 'nullable|string|max:600',
        'timestamp' => 'required',
        'direction' => 'nullable|string|max:50',
        'status' => 'nullable|string|max:20',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function agent(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Agent::class, 'agent_id');
    }

    public function customer(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Customer::class, 'customer_id');
    }

    public function sentimentAnalyses(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\SentimentAnalysis::class, 'interaction_id');
    }

    public function socialMediaInteractions(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\SocialMediaInteraction::class, 'interaction_id');
    }
}
