<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sentiment_analysis extends Model
{
    public $table = 'sentiment_analyses';

    public $fillable = [
        'interaction_id',
        'channel',
        'content',
        'sentiment_score',
        'analyzed_at',
        'language'
    ];

    protected $casts = [
        'channel' => 'string',
        'content' => 'string',
        'sentiment_score' => 'string',
        'analyzed_at' => 'string',
        'language' => 'string'
    ];

    public static array $rules = [
        'interaction_id' => 'nullable',
        'channel' => 'nullable|string|max:20',
        'content' => 'nullable|string|max:1000',
        'sentiment_score' => 'nullable|string|max:20',
        'analyzed_at' => 'nullable|string|max:20',
        'language' => 'nullable|string|max:100',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function interaction(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Chat::class, 'interaction_id');
    }
}
