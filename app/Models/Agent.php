<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    public $table = 'agents';

    public $fillable = [
        'user_id',
        'supervisor_id',
        'department_id',
        'agent_code',
        'full_name',
        'email',
        'phone',
        'status',
        'login_time',
        'logout_time',
        'current_call_status',
        'total_calls_handled',
        'performance_score'
    ];

    protected $casts = [
        'agent_code' => 'string',
        'full_name' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'status' => 'string',
        'login_time' => 'string',
        'logout_time' => 'string',
        'current_call_status' => 'string',
        'total_calls_handled' => 'string',
        'performance_score' => 'string'
    ];

    public static array $rules = [
        'user_id' => 'nullable',
        'supervisor_id' => 'nullable',
        'department_id' => 'nullable',
        'agent_code' => 'nullable|string|max:50',
        'full_name' => 'nullable|string|max:100',
        'email' => 'nullable|string|max:255',
        'phone' => 'nullable|string|max:20',
        'status' => 'nullable|string|max:20',
        'login_time' => 'nullable|string|max:20',
        'logout_time' => 'nullable|string|max:20',
        'current_call_status' => 'nullable|string|max:20',
        'total_calls_handled' => 'nullable|string|max:20',
        'performance_score' => 'nullable|string|max:20',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function supervisor(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Supervisor::class, 'supervisor_id');
    }

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }

    public function department(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Department::class, 'department_id');
    }

    public function agentPeformances(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\AgentPeformance::class, 'agent_id');
    }

    public function calls(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Call::class, 'agent_id');
    }

    public function cases(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Case::class, 'agent_id');
    }

    public function chats(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Chat::class, 'agent_id');
    }

    public function emails(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Email::class, 'agent_id');
    }

    public function performanceReports(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\PerformanceReport::class, 'agent_id');
    }

    public function qualityAssessments(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\QualityAssessment::class, 'agent_id');
    }

    public function queues(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Queue::class, 'agent_id');
    }

    public function sms(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Sms::class, 'agent_id');
    }

    public function tickets(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Ticket::class, 'agent_id');
    }

    public function whatsapps(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Whatsapp::class, 'agent_id');
    }
}
