<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dialer extends Model
{
    public $table = 'dialers';

    public $fillable = [
        'campaign_id',
        'full_name',
        'type',
        'status',
        'max_concurrent_calls',
        'retry_attempts',
        'retry_interval',
        'created_by'
    ];

    protected $casts = [
        'full_name' => 'string',
        'type' => 'string',
        'status' => 'string',
        'max_concurrent_calls' => 'string',
        'retry_attempts' => 'string',
        'retry_interval' => 'string',
        'created_by' => 'string'
    ];

    public static array $rules = [
        'campaign_id' => 'nullable',
        'full_name' => 'nullable|string|max:100',
        'type' => 'nullable|string|max:100',
        'status' => 'nullable|string|max:100',
        'max_concurrent_calls' => 'nullable|string|max:100',
        'retry_attempts' => 'nullable|string|max:20',
        'retry_interval' => 'nullable|string|max:100',
        'created_by' => 'nullable|string|max:100',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function campaign(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Campaign::class, 'campaign_id');
    }
}
