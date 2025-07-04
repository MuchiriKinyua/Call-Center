<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer_case extends Model
{
    public $table = 'customer_cases';

    public $fillable = [
        'customer_id',
        'agent_id',
        'supervisor_id',
        'department_id',
        'case_number',
        'issue',
        'notes',
        'category',
        'status',
        'priority',
        'channel',
        'opened_at',
        'closed_at',
        'resolution_details',
        'satisfaction_score'
    ];

    protected $casts = [
        'issue' => 'string',
        'notes' => 'string',
        'category' => 'string',
        'status' => 'string',
        'priority' => 'string',
        'channel' => 'string',
        'opened_at' => 'string',
        'closed_at' => 'string',
        'resolution_details' => 'string',
        'satisfaction_score' => 'string'
    ];

    public static array $rules = [
        'customer_id' => 'nullable',
        'agent_id' => 'nullable',
        'supervisor_id' => 'nullable',
        'department_id' => 'nullable',
        'case_number' => 'nullable',
        'issue' => 'nullable|string|max:100',
        'notes' => 'nullable|string|max:600',
        'category' => 'nullable|string|max:100',
        'status' => 'nullable|string|max:20',
        'priority' => 'nullable|string|max:100',
        'channel' => 'nullable|string|max:20',
        'opened_at' => 'nullable|string|max:20',
        'closed_at' => 'nullable|string|max:100',
        'resolution_details' => 'nullable|string|max:100',
        'satisfaction_score' => 'nullable|string|max:100',
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

    public function customer(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Customer::class, 'customer_id');
    }

    public function department(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Department::class, 'department_id');
    }
}
