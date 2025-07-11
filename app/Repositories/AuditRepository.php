<?php

namespace App\Repositories;

use App\Models\Audit;
use App\Repositories\BaseRepository;

class AuditRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'user_id',
        'action',
        'module',
        'description',
        'ip_address'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Audit::class;
    }
}
