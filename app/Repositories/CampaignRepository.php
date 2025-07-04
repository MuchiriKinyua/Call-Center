<?php

namespace App\Repositories;

use App\Models\Campaign;
use App\Repositories\BaseRepository;

class CampaignRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'full_name',
        'type',
        'target_audience',
        'scheduled_time',
        'status',
        'created_by'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Campaign::class;
    }
}
