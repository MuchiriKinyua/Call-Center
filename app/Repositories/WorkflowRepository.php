<?php

namespace App\Repositories;

use App\Models\Workflow;
use App\Repositories\BaseRepository;

class WorkflowRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'full_name',
        'description',
        'trigger_event',
        'conditions',
        'actions',
        'is_active',
        'priority',
        'created_by'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Workflow::class;
    }
}
