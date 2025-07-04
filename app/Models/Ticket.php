<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    public $table = 'tickets';

    public $fillable = [
        'customer_id',
        'agent_id',
        'supervisor_id',
        'subject',
        'description',
        'category',
        'priority',
        'status',
        'channel',
        'resolved_at',
        'closed_at',
        'notes'
    ];

    protected $casts = [
        'subject' => 'string',
        'description' => 'string',
        'category' => 'string',
        'priority' => 'string',
        'status' => 'string',
        'channel' => 'string',
        'resolved_at' => 'string',
        'closed_at' => 'string',
        'notes' => 'string'
    ];

    public static array $rules = [
        'customer_id' => 'nullable',
        'agent_id' => 'nullable',
        'supervisor_id' => 'nullable',
        'subject' => 'nullable|string|max:600',
        'description' => 'nullable|string|max:600',
        'category' => 'nullable|string|max:100',
        'priority' => 'nullable|string|max:100',
        'status' => 'nullable|string|max:20',
        'channel' => 'nullable|string|max:20',
        'resolved_at' => 'nullable|string|max:100',
        'closed_at' => 'nullable|string|max:100',
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

    public function customer(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Customer::class, 'customer_id');
    }

    public function calls(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Call::class, 'ticket_id');
    }

    public function customerFeedbacks(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\CustomerFeedback::class, 'ticket_id');
    }

    public function escalations(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Escalation::class, 'ticket_id');
    }

    public function ticketStatutes(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\TicketStatute::class, 'ticket_id');
    }
}
