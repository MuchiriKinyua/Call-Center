<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="dialers-table">
            <thead>
            <tr>
                <th>Campaign Id</th>
                <th>Full Name</th>
                <th>Type</th>
                <th>Status</th>
                <th>Max Concurrent Calls</th>
                <th>Retry Attempts</th>
                <th>Retry Interval</th>
                <th>Created By</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($dialers as $dialer)
                <tr>
                    <td>{{ $dialer->campaign_id }}</td>
                    <td>{{ $dialer->full_name }}</td>
                    <td>{{ $dialer->type }}</td>
                    <td>{{ $dialer->status }}</td>
                    <td>{{ $dialer->max_concurrent_calls }}</td>
                    <td>{{ $dialer->retry_attempts }}</td>
                    <td>{{ $dialer->retry_interval }}</td>
                    <td>{{ $dialer->created_by }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['dialers.destroy', $dialer->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('dialers.show', [$dialer->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('dialers.edit', [$dialer->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $dialers])
        </div>
    </div>
</div>
