<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="calls-table">
            <thead>
            <tr>
                <th>Call Id</th>
                <th>Ticket Id</th>
                <th>Customer Id</th>
                <th>Agent Id</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Duration</th>
                <th>Call Type</th>
                <th>Status</th>
                <th>Recording Url</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($calls as $call)
                <tr>
                    <td>{{ $call->call_id }}</td>
                    <td>{{ $call->ticket_id }}</td>
                    <td>{{ $call->customer_id }}</td>
                    <td>{{ $call->agent_id }}</td>
                    <td>{{ $call->start_time }}</td>
                    <td>{{ $call->end_time }}</td>
                    <td>{{ $call->duration }}</td>
                    <td>{{ $call->call_type }}</td>
                    <td>{{ $call->status }}</td>
                    <td>{{ $call->recording_url }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['calls.destroy', $call->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('calls.show', [$call->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('calls.edit', [$call->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $calls])
        </div>
    </div>
</div>
