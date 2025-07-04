<?php

namespace App\Repositories;

use App\Models\Chat;
use App\Repositories\BaseRepository;

class ChatRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'session_id',
        'customer_id',
        'agent_id',
        'message',
        'timestamp',
        'channel'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Chat::class;
    }
}
