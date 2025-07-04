<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="agents-table">
            <thead>
            <tr>
                <th>User Id</th>
                <th>Supervisor Id</th>
                <th>Department Id</th>
                <th>Agent Code</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Status</th>
                <th>Login Time</th>
                <th>Logout Time</th>
                <th>Current Call Status</th>
                <th>Total Calls Handled</th>
                <th>Performance Score</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($agents as $agent)
                <tr>
                    <td>{{ $agent->user_id }}</td>
                    <td>{{ $agent->supervisor_id }}</td>
                    <td>{{ $agent->department_id }}</td>
                    <td>{{ $agent->agent_code }}</td>
                    <td>{{ $agent->full_name }}</td>
                    <td>{{ $agent->email }}</td>
                    <td>{{ $agent->phone }}</td>
                    <td>{{ $agent->status }}</td>
                    <td>{{ $agent->login_time }}</td>
                    <td>{{ $agent->logout_time }}</td>
                    <td>{{ $agent->current_call_status }}</td>
                    <td>{{ $agent->total_calls_handled }}</td>
                    <td>{{ $agent->performance_score }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['agents.destroy', $agent->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('agents.show', [$agent->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('agents.edit', [$agent->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $agents])
        </div>
    </div>
</div>
