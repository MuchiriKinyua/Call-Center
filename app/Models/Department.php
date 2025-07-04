<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public $table = 'departments';

    public $fillable = [
        'supervisor_id',
        'full_name',
        'description',
        'status'
    ];

    protected $casts = [
        'full_name' => 'string',
        'description' => 'string',
        'status' => 'string'
    ];

    public static array $rules = [
        'supervisor_id' => 'nullable',
        'full_name' => 'nullable|string|max:100',
        'description' => 'nullable|string|max:600',
        'status' => 'nullable|string|max:20',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function supervisor(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Supervisor::class, 'supervisor_id');
    }

    public function agents(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Agent::class, 'department_id');
    }

    public function cases(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Case::class, 'department_id');
    }

    public function queues(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Queue::class, 'department_id');
    }

    public function supervisor1s(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Supervisor::class, 'department_id');
    }

    public function users(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\User::class, 'department_id');
    }
}
