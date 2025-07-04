<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer_feedback extends Model
{
    public $table = 'customer_feedbacks';

    public $fillable = [
        'ticket_id',
        'customer_id',
        'rating',
        'comments',
        'submitted_at'
    ];

    protected $casts = [
        'rating' => 'string',
        'comments' => 'string',
        'submitted_at' => 'string'
    ];

    public static array $rules = [
        'ticket_id' => 'nullable',
        'customer_id' => 'nullable',
        'rating' => 'nullable|string|max:600',
        'comments' => 'nullable|string|max:100',
        'submitted_at' => 'nullable|string|max:100',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function customer(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Customer::class, 'customer_id');
    }

    public function ticket(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Ticket::class, 'ticket_id');
    }
}
