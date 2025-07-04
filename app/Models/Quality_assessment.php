<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quality_assessment extends Model
{
    public $table = 'quality_assessments';

    public $fillable = [
        'agent_id',
        'call_id',
        'supervisor_id',
        'assessment_date',
        'score',
        'notes'
    ];

    protected $casts = [
        'assessment_date' => 'date',
        'score' => 'string',
        'notes' => 'string'
    ];

    public static array $rules = [
        'agent_id' => 'nullable',
        'call_id' => 'nullable',
        'supervisor_id' => 'nullable',
        'assessment_date' => 'nullable',
        'score' => 'nullable|string|max:20',
        'notes' => 'nullable|string|max:600',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function supervisor(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Supervisor::class, 'supervisor_id');
    }

    public function agent(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Agent::class, 'agent_id');
    }

    public function call(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Call::class, 'call_id');
    }
}
