<?php

namespace App\Repositories;

use App\Models\Queue;
use App\Repositories\BaseRepository;

class QueueRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'agent_id',
        'department_id',
        'full_name',
        'max_wait_time',
        'priority_level',
        'status'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Queue::class;
    }
}
