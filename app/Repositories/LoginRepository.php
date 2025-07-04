<?php

namespace App\Repositories;

use App\Models\Login;
use App\Repositories\BaseRepository;

class LoginRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'user_id',
        'login_time',
        'logout_time',
        'ip_address',
        'device',
        'status',
        'location'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Login::class;
    }
}
