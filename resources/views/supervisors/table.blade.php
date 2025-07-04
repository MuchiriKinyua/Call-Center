<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="supervisors-table">
            <thead>
            <tr>
                <th>User Id</th>
                <th>Department Id</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Status</th>
                <th>Assigned Agents Count</th>
                <th>Performance Rating</th>
                <th>Login Time</th>
                <th>Logout Time</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($supervisors as $supervisor)
                <tr>
                    <td>{{ $supervisor->user_id }}</td>
                    <td>{{ $supervisor->department_id }}</td>
                    <td>{{ $supervisor->full_name }}</td>
                    <td>{{ $supervisor->email }}</td>
                    <td>{{ $supervisor->phone }}</td>
                    <td>{{ $supervisor->status }}</td>
                    <td>{{ $supervisor->assigned_agents_count }}</td>
                    <td>{{ $supervisor->performance_rating }}</td>
                    <td>{{ $supervisor->login_time }}</td>
                    <td>{{ $supervisor->logout_time }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['supervisors.destroy', $supervisor->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('supervisors.show', [$supervisor->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('supervisors.edit', [$supervisor->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $supervisors])
        </div>
    </div>
</div>
