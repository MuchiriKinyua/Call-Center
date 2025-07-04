<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Social_media extends Model
{
    public $table = 'social_media';

    public $fillable = [
        'ticket_id',
        'interaction_id',
        'platform',
        'username',
        'message',
        'sentiment_label',
        'interaction_type',
        'timestamp',
        'handled_by',
        'status'
    ];

    protected $casts = [
        'platform' => 'string',
        'username' => 'string',
        'message' => 'string',
        'sentiment_label' => 'string',
        'interaction_type' => 'string',
        'timestamp' => 'datetime',
        'handled_by' => 'string',
        'status' => 'string'
    ];

    public static array $rules = [
        'ticket_id' => 'nullable',
        'interaction_id' => 'nullable',
        'platform' => 'nullable|string|max:20',
        'username' => 'nullable|string|max:100',
        'message' => 'nullable|string|max:600',
        'sentiment_label' => 'nullable|string|max:20',
        'interaction_type' => 'nullable|string|max:20',
        'timestamp' => 'required',
        'handled_by' => 'nullable|string|max:100',
        'status' => 'nullable|string|max:20',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function interaction(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Sms::class, 'interaction_id');
    }
}
