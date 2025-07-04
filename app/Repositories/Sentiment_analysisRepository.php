<?php

namespace App\Repositories;

use App\Models\Sentiment_analysis;
use App\Repositories\BaseRepository;

class Sentiment_analysisRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'interaction_id',
        'channel',
        'content',
        'sentiment_score',
        'analyzed_at',
        'language'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Sentiment_analysis::class;
    }
}
