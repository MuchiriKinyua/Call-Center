<?php

namespace App\Repositories;

use App\Models\Customer_case;
use App\Repositories\BaseRepository;

class Customer_caseRepository extends BaseRepository
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
        return Customer_case::class;
    }
}
