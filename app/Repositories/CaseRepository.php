<?php

namespace App\Repositories;

use App\Models\Case;
use App\Repositories\BaseRepository;

class CaseRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'customer_id',
        'agent_id',
        'supervisor_id',
        'department_id',
        'case_number',
        'issue',
        'notes',
        'category',
        'status',
        'priority',
        'channel',
        'opened_at',
        'closed_at',
        'resolution_details',
        'satisfaction_score'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Case::class;
    }
}
