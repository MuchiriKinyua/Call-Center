<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Whatsapp extends Model
{
    public $table = 'whatsapps';

    public $fillable = [
        'customer_id',
        'agent_id',
        'phone_number',
        'message',
        'media_url',
        'timestamp',
        'direction',
        'status'
    ];

    protected $casts = [
        'phone_number' => 'string',
        'message' => 'string',
        'media_url' => 'string',
        'timestamp' => 'datetime',
        'direction' => 'string',
        'status' => 'string'
    ];

    public static array $rules = [
        'customer_id' => 'nullable',
        'agent_id' => 'nullable',
        'phone_number' => 'nullable|string|max:20',
        'message' => 'nullable|string|max:600',
        'media_url' => 'nullable|string|max:600',
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

    public function socialMedia(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\SocialMedia::class, 'interaction_id');
    }
}
