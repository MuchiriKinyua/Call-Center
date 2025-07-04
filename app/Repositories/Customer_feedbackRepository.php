<?php

namespace App\Repositories;

use App\Models\Customer_feedback;
use App\Repositories\BaseRepository;

class Customer_feedbackRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'ticket_id',
        'customer_id',
        'rating',
        'comments',
        'submitted_at'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Customer_feedback::class;
    }
}
