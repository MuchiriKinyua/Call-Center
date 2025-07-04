<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    public $table = 'logins';

    public $fillable = [
        'user_id',
        'login_time',
        'logout_time',
        'ip_address',
        'device',
        'status',
        'location'
    ];

    protected $casts = [
        'login_time' => 'string',
        'logout_time' => 'string',
        'ip_address' => 'string',
        'device' => 'string',
        'status' => 'string',
        'location' => 'string'
    ];

    public static array $rules = [
        'user_id' => 'nullable',
        'login_time' => 'nullable|string|max:20',
        'logout_time' => 'nullable|string|max:20',
        'ip_address' => 'nullable|string|max:100',
        'device' => 'nullable|string|max:50',
        'status' => 'nullable|string|max:20',
        'location' => 'nullable|string|max:100',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }
}
