<?php

namespace App\Repositories;

use App\Models\Whatsapp;
use App\Repositories\BaseRepository;

class WhatsappRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'customer_id',
        'agent_id',
        'phone_number',
        'message',
        'media_url',
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
        return Whatsapp::class;
    }
}
