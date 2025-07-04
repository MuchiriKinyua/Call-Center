<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="agent_performances-table">
            <thead>
            <tr>
                <th>Agent Id</th>
                <th>Calls Handled</th>
                <th>Tickets Resolved</th>
                <th>Average Response Time</th>
                <th>Average Resolution Time</th>
                <th>Customer Satisfaction Score</th>
                <th>First Call Resolution Rate</th>
                <th>Feedback Count</th>
                <th>Performance Period</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($agentPerformances as $agentPerformance)
                <tr>
                    <td>{{ $agentPerformance->agent_id }}</td>
                    <td>{{ $agentPerformance->calls_handled }}</td>
                    <td>{{ $agentPerformance->tickets_resolved }}</td>
                    <td>{{ $agentPerformance->average_response_time }}</td>
                    <td>{{ $agentPerformance->average_resolution_time }}</td>
                    <td>{{ $agentPerformance->customer_satisfaction_score }}</td>
                    <td>{{ $agentPerformance->first_call_resolution_rate }}</td>
                    <td>{{ $agentPerformance->feedback_count }}</td>
                    <td>{{ $agentPerformance->performance_period }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['agentPerformances.destroy', $agentPerformance->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('agentPerformances.show', [$agentPerformance->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('agentPerformances.edit', [$agentPerformance->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $agentPerformances])
        </div>
    </div>
</div>
