<?php

namespace App\Repositories;

use App\Models\Sms;
use App\Repositories\BaseRepository;

class SmsRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'customer_id',
        'agent_id',
        'phone_number',
        'message',
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
        return Sms::class;
    }
}
