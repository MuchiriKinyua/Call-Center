<?php

namespace App\Repositories;

use App\Models\Social_media;
use App\Repositories\BaseRepository;

class Social_mediaRepository extends BaseRepository
{
    protected $fieldSearchable = [
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

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Social_media::class;
    }
}
