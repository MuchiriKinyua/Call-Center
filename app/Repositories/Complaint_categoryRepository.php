<?php

namespace App\Repositories;

use App\Models\Complaint_category;
use App\Repositories\BaseRepository;

class Complaint_categoryRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'full_name',
        'description'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Complaint_category::class;
    }
}
