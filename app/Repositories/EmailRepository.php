<?php

namespace App\Repositories;

use App\Models\Email;
use App\Repositories\BaseRepository;

class EmailRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'customer_id',
        'agent_id',
        'subject',
        'body',
        'timestamp',
        'direction',
        'status'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Email::class;
    }
}
