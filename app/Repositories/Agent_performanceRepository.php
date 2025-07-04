<?php

namespace App\Repositories;

use App\Models\Agent_performance;
use App\Repositories\BaseRepository;

class Agent_performanceRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'agent_id',
        'calls_handled',
        'tickets_resolved',
        'average_response_time',
        'average_resolution_time',
        'customer_satisfaction_score',
        'first_call_resolution_rate',
        'feedback_count',
        'performance_period'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Agent_performance::class;
    }
}
