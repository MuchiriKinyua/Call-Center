<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Audit extends Model
{
    public $table = 'audits';

    public $fillable = [
        'user_id',
        'action',
        'module',
        'description',
        'ip_address'
    ];

    protected $casts = [
        'action' => 'string',
        'module' => 'string',
        'description' => 'string',
        'ip_address' => 'string'
    ];

    public static array $rules = [
        'user_id' => 'nullable',
        'action' => 'nullable|string|max:255',
        'module' => 'nullable|string|max:100',
        'description' => 'nullable|string|max:600',
        'ip_address' => 'nullable|string|max:100',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }
}
