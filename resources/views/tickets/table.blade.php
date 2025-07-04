<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="tickets-table">
            <thead>
            <tr>
                <th>Customer Id</th>
                <th>Agent Id</th>
                <th>Supervisor Id</th>
                <th>Subject</th>
                <th>Description</th>
                <th>Category</th>
                <th>Priority</th>
                <th>Status</th>
                <th>Channel</th>
                <th>Resolved At</th>
                <th>Closed At</th>
                <th>Notes</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tickets as $ticket)
                <tr>
                    <td>{{ $ticket->customer_id }}</td>
                    <td>{{ $ticket->agent_id }}</td>
                    <td>{{ $ticket->supervisor_id }}</td>
                    <td>{{ $ticket->subject }}</td>
                    <td>{{ $ticket->description }}</td>
                    <td>{{ $ticket->category }}</td>
                    <td>{{ $ticket->priority }}</td>
                    <td>{{ $ticket->status }}</td>
                    <td>{{ $ticket->channel }}</td>
                    <td>{{ $ticket->resolved_at }}</td>
                    <td>{{ $ticket->closed_at }}</td>
                    <td>{{ $ticket->notes }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['tickets.destroy', $ticket->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('tickets.show', [$ticket->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('tickets.edit', [$ticket->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $tickets])
        </div>
    </div>
</div>
