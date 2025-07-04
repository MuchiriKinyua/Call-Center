<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    public $table = 'emails';

    public $fillable = [
        'customer_id',
        'agent_id',
        'subject',
        'body',
        'timestamp',
        'direction',
        'status'
    ];

    protected $casts = [
        'subject' => 'string',
        'body' => 'string',
        'timestamp' => 'datetime',
        'direction' => 'string',
        'status' => 'string'
    ];

    public static array $rules = [
        'customer_id' => 'nullable',
        'agent_id' => 'nullable',
        'subject' => 'nullable|string|max:600',
        'body' => 'nullable|string|max:600',
        'timestamp' => 'nullable',
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

    public function sentimentAnalysis(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\SentimentAnalysi::class, 'interaction_id');
    }
}
