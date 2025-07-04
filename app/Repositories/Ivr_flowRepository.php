<?php

namespace App\Repositories;

use App\Models\Ivr_flow;
use App\Repositories\BaseRepository;

class Ivr_flowRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'full_name',
        'description',
        'json_structure',
        'status',
        'created_by'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Ivr_flow::class;
    }
}
