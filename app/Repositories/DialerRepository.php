<?php

namespace App\Repositories;

use App\Models\Dialer;
use App\Repositories\BaseRepository;

class DialerRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'campaign_id',
        'full_name',
        'type',
        'status',
        'max_concurrent_calls',
        'retry_attempts',
        'retry_interval',
        'created_by'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Dialer::class;
    }
}
