<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="performance_reports-table">
            <thead>
            <tr>
                <th>Agent Id</th>
                <th>Supervisor Id</th>
                <th>Total Calls Handled</th>
                <th>Average Call Duration</th>
                <th>Customer Satisfaction Score</th>
                <th>First Call Resolution Rate</th>
                <th>Tickets Solved</th>
                <th>Feedback Score</th>
                <th>Report Period Start</th>
                <th>Report Period End</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($performanceReports as $performanceReport)
                <tr>
                    <td>{{ $performanceReport->agent_id }}</td>
                    <td>{{ $performanceReport->supervisor_id }}</td>
                    <td>{{ $performanceReport->total_calls_handled }}</td>
                    <td>{{ $performanceReport->average_call_duration }}</td>
                    <td>{{ $performanceReport->customer_satisfaction_score }}</td>
                    <td>{{ $performanceReport->first_call_resolution_rate }}</td>
                    <td>{{ $performanceReport->tickets_solved }}</td>
                    <td>{{ $performanceReport->feedback_score }}</td>
                    <td>{{ $performanceReport->report_period_start }}</td>
                    <td>{{ $performanceReport->report_period_end }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['performanceReports.destroy', $performanceReport->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('performanceReports.show', [$performanceReport->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('performanceReports.edit', [$performanceReport->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $performanceReports])
        </div>
    </div>
</div>
