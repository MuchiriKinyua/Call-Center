<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket_statute extends Model
{
    public $table = 'ticket_statutes';

    public $fillable = [
        'ticket_id',
        'full_name',
        'description'
    ];

    protected $casts = [
        'full_name' => 'string',
        'description' => 'string'
    ];

    public static array $rules = [
        'ticket_id' => 'nullable',
        'full_name' => 'nullable|string|max:100',
        'description' => 'nullable|string|max:600',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function ticket(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Ticket::class, 'ticket_id');
    }
}
