<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agent_performance extends Model
{
    public $table = 'agent_performances';

    public $fillable = [
        'agent_id',
        'calls_handled',
        'tickets_resolved',
        'average_response_time',
        'average_resolution_time',
        'customer_satisfaction_score',
        'first_call_resolution_rate',
        'feedback_count',
        'performance_period'
    ];

    protected $casts = [
        'calls_handled' => 'string',
        'tickets_resolved' => 'string',
        'customer_satisfaction_score' => 'string',
        'first_call_resolution_rate' => 'string',
        'feedback_count' => 'string',
        'performance_period' => 'date'
    ];

    public static array $rules = [
        'agent_id' => 'nullable',
        'calls_handled' => 'nullable|string|max:100',
        'tickets_resolved' => 'nullable|string|max:100',
        'average_response_time' => 'nullable',
        'average_resolution_time' => 'nullable',
        'customer_satisfaction_score' => 'nullable|string|max:100',
        'first_call_resolution_rate' => 'nullable|string|max:100',
        'feedback_count' => 'nullable|string|max:100',
        'performance_period' => 'nullable',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function agent(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Agent::class, 'agent_id');
    }
}
