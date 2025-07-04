<?php

namespace App\Repositories;

use App\Models\Call;
use App\Repositories\BaseRepository;

class CallRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'call_id',
        'ticket_id',
        'customer_id',
        'agent_id',
        'start_time',
        'end_time',
        'duration',
        'call_type',
        'status',
        'recording_url'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Call::class;
    }
}
