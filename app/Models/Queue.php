<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Queue extends Model
{
    public $table = 'queues';

    public $fillable = [
        'agent_id',
        'department_id',
        'full_name',
        'max_wait_time',
        'priority_level',
        'status'
    ];

    protected $casts = [
        'full_name' => 'string',
        'priority_level' => 'string',
        'status' => 'string'
    ];

    public static array $rules = [
        'agent_id' => 'nullable',
        'department_id' => 'nullable',
        'full_name' => 'nullable|string|max:100',
        'max_wait_time' => 'nullable',
        'priority_level' => 'nullable|string|max:100',
        'status' => 'nullable|string|max:20',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function department(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Department::class, 'department_id');
    }

    public function agent(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Agent::class, 'agent_id');
    }
}
