<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="logins-table">
            <thead>
            <tr>
                <th>User Id</th>
                <th>Login Time</th>
                <th>Logout Time</th>
                <th>Ip Address</th>
                <th>Device</th>
                <th>Status</th>
                <th>Location</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($logins as $login)
                <tr>
                    <td>{{ $login->user_id }}</td>
                    <td>{{ $login->login_time }}</td>
                    <td>{{ $login->logout_time }}</td>
                    <td>{{ $login->ip_address }}</td>
                    <td>{{ $login->device }}</td>
                    <td>{{ $login->status }}</td>
                    <td>{{ $login->location }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['logins.destroy', $login->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('logins.show', [$login->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('logins.edit', [$login->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $logins])
        </div>
    </div>
</div>
