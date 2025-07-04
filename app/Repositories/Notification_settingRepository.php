<?php

namespace App\Repositories;

use App\Models\Notification_setting;
use App\Repositories\BaseRepository;

class Notification_settingRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'user_id',
        'channel',
        'type',
        'is_enabled',
        'preferred_time'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Notification_setting::class;
    }
}
