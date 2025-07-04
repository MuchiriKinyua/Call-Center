<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ivr_flow extends Model
{
    public $table = 'ivr_flows';

    public $fillable = [
        'full_name',
        'description',
        'json_structure',
        'status',
        'created_by'
    ];

    protected $casts = [
        'full_name' => 'string',
        'description' => 'string',
        'json_structure' => 'string',
        'status' => 'string',
        'created_by' => 'string'
    ];

    public static array $rules = [
        'full_name' => 'nullable|string|max:100',
        'description' => 'nullable|string|max:600',
        'json_structure' => 'nullable|string|max:1000',
        'status' => 'nullable|string|max:20',
        'created_by' => 'nullable|string|max:100',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    
}
