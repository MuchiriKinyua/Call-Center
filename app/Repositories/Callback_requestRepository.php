<?php

namespace App\Repositories;

use App\Models\Callback_request;
use App\Repositories\BaseRepository;

class Callback_requestRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'customer_name',
        'phone',
        'preferred_time',
        'status',
        'agent_id',
        'source',
        'notes'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Callback_request::class;
    }
}
