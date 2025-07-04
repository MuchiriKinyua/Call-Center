<?php

namespace App\Repositories;

use App\Models\Survey;
use App\Repositories\BaseRepository;

class SurveyRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'title',
        'description',
        'target_audience',
        'channel',
        'start_date',
        'end_date',
        'status',
        'created_by'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Survey::class;
    }
}
