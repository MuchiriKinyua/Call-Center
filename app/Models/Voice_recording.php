<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Voice_recording extends Model
{
    public $table = 'voice_recordings';

    public $fillable = [
        'call_id',
        'recording_url',
        'duration',
        'format',
        'transcription_text'
    ];

    protected $casts = [
        'recording_url' => 'string',
        'duration' => 'string',
        'format' => 'string',
        'transcription_text' => 'string'
    ];

    public static array $rules = [
        'call_id' => 'nullable',
        'recording_url' => 'nullable|string|max:255',
        'duration' => 'nullable|string|max:20',
        'format' => 'nullable|string|max:100',
        'transcription_text' => 'nullable|string|max:255',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function sentimentAnalyses(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\SentimentAnalysis::class, 'interaction_id');
    }

    public function socialMedia(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\SocialMedia::class, 'interaction_id');
    }
}
