<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Callback_request extends Model
{
    public $table = 'callback_requests';

    public $fillable = [
        'customer_name',
        'phone',
        'preferred_time',
        'status',
        'agent_id',
        'source',
        'notes'
    ];

    protected $casts = [
        'customer_name' => 'string',
        'phone' => 'string',
        'status' => 'string',
        'source' => 'string',
        'notes' => 'string'
    ];

    public static array $rules = [
        'customer_name' => 'nullable|string|max:100',
        'phone' => 'nullable|string|max:20',
        'preferred_time' => 'nullable',
        'status' => 'nullable|string|max:20',
        'agent_id' => 'nullable',
        'source' => 'nullable|string|max:20',
        'notes' => 'nullable|string|max:600',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    
}
