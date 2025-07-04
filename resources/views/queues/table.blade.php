<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="queues-table">
            <thead>
            <tr>
                <th>Agent Id</th>
                <th>Department Id</th>
                <th>Full Name</th>
                <th>Max Wait Time</th>
                <th>Priority Level</th>
                <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($queues as $queue)
                <tr>
                    <td>{{ $queue->agent_id }}</td>
                    <td>{{ $queue->department_id }}</td>
                    <td>{{ $queue->full_name }}</td>
                    <td>{{ $queue->max_wait_time }}</td>
                    <td>{{ $queue->priority_level }}</td>
                    <td>{{ $queue->status }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['queues.destroy', $queue->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('queues.show', [$queue->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('queues.edit', [$queue->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $queues])
        </div>
    </div>
</div>
