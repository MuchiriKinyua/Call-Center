<?php

namespace App\Repositories;

use App\Models\Crm_setting;
use App\Repositories\BaseRepository;

class Crm_settingRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'crm_name',
        'api_key',
        'api_secret',
        'base_url',
        'auth_type',
        'is_active',
        'created_by'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Crm_setting::class;
    }
}
