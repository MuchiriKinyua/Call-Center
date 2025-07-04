<?php

namespace App\Repositories;

use App\Models\Voice_recording;
use App\Repositories\BaseRepository;

class Voice_recordingRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'call_id',
        'recording_url',
        'duration',
        'format',
        'transcription_text'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Voice_recording::class;
    }
}
