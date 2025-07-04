<?php

namespace App\Repositories;

use App\Models\Performance_report;
use App\Repositories\BaseRepository;

class Performance_reportRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'agent_id',
        'supervisor_id',
        'total_calls_handled',
        'average_call_duration',
        'customer_satisfaction_score',
        'first_call_resolution_rate',
        'tickets_solved',
        'feedback_score',
        'report_period_start',
        'report_period_end'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Performance_report::class;
    }
}
