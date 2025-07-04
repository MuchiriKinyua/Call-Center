<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Performance_report extends Model
{
    public $table = 'performance_reports';

    public $fillable = [
        'agent_id',
        'supervisor_id',
        'total_calls_handled',
        'average_call_duration',
        'customer_satisfaction_score',
        'first_call_resolution_rate',
        'tickets_solved',
        'feedback_score',
        'report_period_start',
        'report_period_end'
    ];

    protected $casts = [
        'total_calls_handled' => 'string',
        'average_call_duration' => 'string',
        'customer_satisfaction_score' => 'string',
        'first_call_resolution_rate' => 'string',
        'tickets_solved' => 'string',
        'feedback_score' => 'string',
        'report_period_start' => 'string',
        'report_period_end' => 'string'
    ];

    public static array $rules = [
        'agent_id' => 'nullable',
        'supervisor_id' => 'nullable',
        'total_calls_handled' => 'nullable|string|max:20',
        'average_call_duration' => 'nullable|string|max:20',
        'customer_satisfaction_score' => 'nullable|string|max:100',
        'first_call_resolution_rate' => 'nullable|string|max:100',
        'tickets_solved' => 'nullable|string|max:100',
        'feedback_score' => 'nullable|string|max:100',
        'report_period_start' => 'nullable|string|max:100',
        'report_period_end' => 'nullable|string|max:100',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function agent(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Agent::class, 'agent_id');
    }

    public function supervisor(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Supervisor::class, 'supervisor_id');
    }
}
