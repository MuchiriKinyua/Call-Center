<?php

namespace App\Repositories;

use App\Models\Agent;
use App\Repositories\BaseRepository;

class AgentRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'user_id',
        'supervisor_id',
        'department_id',
        'agent_code',
        'full_name',
        'email',
        'phone',
        'status',
        'login_time',
        'logout_time',
        'current_call_status',
        'total_calls_handled',
        'performance_score'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Agent::class;
    }
}
