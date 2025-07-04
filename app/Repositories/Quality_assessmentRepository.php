<?php

namespace App\Repositories;

use App\Models\Quality_assessment;
use App\Repositories\BaseRepository;

class Quality_assessmentRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'agent_id',
        'call_id',
        'supervisor_id',
        'assessment_date',
        'score',
        'notes'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Quality_assessment::class;
    }
}
