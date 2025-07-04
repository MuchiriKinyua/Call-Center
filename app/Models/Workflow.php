<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Workflow extends Model
{
    public $table = 'workflows';

    public $fillable = [
        'full_name',
        'description',
        'trigger_event',
        'conditions',
        'actions',
        'is_active',
        'priority',
        'created_by'
    ];

    protected $casts = [
        'full_name' => 'string',
        'description' => 'string',
        'trigger_event' => 'string',
        'conditions' => 'string',
        'actions' => 'string',
        'is_active' => 'string',
        'priority' => 'string',
        'created_by' => 'string'
    ];

    public static array $rules = [
        'full_name' => 'nullable|string|max:100',
        'description' => 'nullable|string|max:600',
        'trigger_event' => 'nullable|string|max:100',
        'conditions' => 'nullable|string|max:100',
        'actions' => 'nullable|string|max:255',
        'is_active' => 'nullable|string|max:50',
        'priority' => 'nullable|string|max:100',
        'created_by' => 'nullable|string|max:100',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    
}
