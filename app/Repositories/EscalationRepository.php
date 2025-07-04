<?php

namespace App\Repositories;

use App\Models\Escalation;
use App\Repositories\BaseRepository;

class EscalationRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'ticket_id',
        'escalated_from',
        'escalated_to',
        'reason',
        'escalation_level',
        'timestamp',
        'notes'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Escalation::class;
    }
}
