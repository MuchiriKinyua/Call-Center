<?php

namespace App\Repositories;

use App\Models\Supervisor;
use App\Repositories\BaseRepository;

class SupervisorRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'user_id',
        'department_id',
        'full_name',
        'email',
        'phone',
        'status',
        'assigned_agents_count',
        'performance_rating',
        'login_time',
        'logout_time'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Supervisor::class;
    }
}
