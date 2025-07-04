<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Crm_setting extends Model
{
    public $table = 'crm_settings';

    public $fillable = [
        'crm_name',
        'api_key',
        'api_secret',
        'base_url',
        'auth_type',
        'is_active',
        'created_by'
    ];

    protected $casts = [
        'crm_name' => 'string',
        'api_key' => 'string',
        'api_secret' => 'string',
        'base_url' => 'string',
        'auth_type' => 'string',
        'is_active' => 'string',
        'created_by' => 'string'
    ];

    public static array $rules = [
        'crm_name' => 'nullable|string|max:100',
        'api_key' => 'nullable|string|max:255',
        'api_secret' => 'nullable|string|max:255',
        'base_url' => 'nullable|string|max:255',
        'auth_type' => 'nullable|string|max:100',
        'is_active' => 'nullable|string|max:50',
        'created_by' => 'nullable|string|max:100',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    
}
