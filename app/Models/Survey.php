<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    public $table = 'surveys';

    public $fillable = [
        'title',
        'description',
        'target_audience',
        'channel',
        'start_date',
        'end_date',
        'status',
        'created_by'
    ];

    protected $casts = [
        'title' => 'string',
        'description' => 'string',
        'target_audience' => 'string',
        'channel' => 'string',
        'start_date' => 'date',
        'end_date' => 'date',
        'status' => 'string',
        'created_by' => 'string'
    ];

    public static array $rules = [
        'title' => 'nullable|string|max:100',
        'description' => 'nullable|string|max:600',
        'target_audience' => 'nullable|string|max:100',
        'channel' => 'nullable|string|max:20',
        'start_date' => 'nullable',
        'end_date' => 'nullable',
        'status' => 'nullable|string|max:20',
        'created_by' => 'nullable|string|max:100',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    
}
