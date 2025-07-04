<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Call extends Model
{
    public $table = 'calls';

    public $fillable = [
        'call_id',
        'ticket_id',
        'customer_id',
        'agent_id',
        'start_time',
        'end_time',
        'duration',
        'call_type',
        'status',
        'recording_url'
    ];

    protected $casts = [
        'start_time' => 'datetime',
        'end_time' => 'datetime',
        'duration' => 'string',
        'call_type' => 'string',
        'status' => 'string',
        'recording_url' => 'string'
    ];

    public static array $rules = [
        'call_id' => 'nullable',
        'ticket_id' => 'nullable',
        'customer_id' => 'nullable',
        'agent_id' => 'nullable',
        'start_time' => 'nullable',
        'end_time' => 'nullable',
        'duration' => 'nullable|string|max:20',
        'call_type' => 'nullable|string|max:50',
        'status' => 'nullable|string|max:20',
        'recording_url' => 'nullable|string|max:255',
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

    public function ticket(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Ticket::class, 'ticket_id');
    }

    public function qualityAssessments(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\QualityAssessment::class, 'call_id');
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
