<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
    public $table = 'supervisors';

    public $fillable = [
        'user_id',
        'department_id',
        'full_name',
        'email',
        'phone',
        'status',
        'assigned_agents_count',
        'performance_rating',
        'login_time',
        'logout_time'
    ];

    protected $casts = [
        'full_name' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'status' => 'string',
        'login_time' => 'string',
        'logout_time' => 'string'
    ];

    public static array $rules = [
        'user_id' => 'nullable',
        'department_id' => 'nullable',
        'full_name' => 'nullable|string|max:100',
        'email' => 'nullable|string|max:255',
        'phone' => 'nullable|string|max:20',
        'status' => 'nullable|string|max:20',
        'assigned_agents_count' => 'nullable',
        'performance_rating' => 'nullable',
        'login_time' => 'nullable|string|max:20',
        'logout_time' => 'nullable|string|max:20',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function department(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Department::class, 'department_id');
    }

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }

    public function agents(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Agent::class, 'supervisor_id');
    }

    public function cases(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Case::class, 'supervisor_id');
    }

    public function department1s(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Department::class, 'supervisor_id');
    }

    public function performanceReports(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\PerformanceReport::class, 'supervisor_id');
    }

    public function qualityAssessments(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\QualityAssessment::class, 'supervisor_id');
    }

    public function tickets(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Ticket::class, 'supervisor_id');
    }
}
