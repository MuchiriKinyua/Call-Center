<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Escalation extends Model
{
    public $table = 'escalations';

    public $fillable = [
        'ticket_id',
        'escalated_from',
        'escalated_to',
        'reason',
        'escalation_level',
        'timestamp',
        'notes'
    ];

    protected $casts = [
        'escalated_from' => 'string',
        'escalated_to' => 'string',
        'reason' => 'string',
        'escalation_level' => 'string',
        'timestamp' => 'datetime',
        'notes' => 'string'
    ];

    public static array $rules = [
        'ticket_id' => 'nullable',
        'escalated_from' => 'nullable|string|max:100',
        'escalated_to' => 'nullable|string|max:100',
        'reason' => 'nullable|string|max:600',
        'escalation_level' => 'nullable|string|max:100',
        'timestamp' => 'required',
        'notes' => 'nullable|string|max:600',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function ticket(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Ticket::class, 'ticket_id');
    }
}
