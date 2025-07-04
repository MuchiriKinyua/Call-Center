<?php

namespace App\Repositories;

use App\Models\Ticket;
use App\Repositories\BaseRepository;

class TicketRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'customer_id',
        'agent_id',
        'supervisor_id',
        'subject',
        'description',
        'category',
        'priority',
        'status',
        'channel',
        'resolved_at',
        'closed_at',
        'notes'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Ticket::class;
    }
}
