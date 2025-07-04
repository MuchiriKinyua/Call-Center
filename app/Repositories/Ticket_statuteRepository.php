<?php

namespace App\Repositories;

use App\Models\Ticket_statute;
use App\Repositories\BaseRepository;

class Ticket_statuteRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'ticket_id',
        'full_name',
        'description'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Ticket_statute::class;
    }
}
