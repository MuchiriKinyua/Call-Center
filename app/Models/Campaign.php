<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    public $table = 'campaigns';

    public $fillable = [
        'full_name',
        'type',
        'target_audience',
        'scheduled_time',
        'status',
        'created_by'
    ];

    protected $casts = [
        'full_name' => 'string',
        'type' => 'string',
        'target_audience' => 'string',
        'status' => 'string',
        'created_by' => 'string'
    ];

    public static array $rules = [
        'full_name' => 'nullable|string|max:100',
        'type' => 'nullable|string|max:100',
        'target_audience' => 'nullable|string|max:100',
        'scheduled_time' => 'nullable',
        'status' => 'nullable|string|max:20',
        'created_by' => 'nullable|string|max:100',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function dialers(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Dialer::class, 'campaign_id');
    }
}
