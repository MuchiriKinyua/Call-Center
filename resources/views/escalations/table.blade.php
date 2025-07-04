<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="escalations-table">
            <thead>
            <tr>
                <th>Ticket Id</th>
                <th>Escalated From</th>
                <th>Escalated To</th>
                <th>Reason</th>
                <th>Escalation Level</th>
                <th>Timestamp</th>
                <th>Notes</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($escalations as $escalation)
                <tr>
                    <td>{{ $escalation->ticket_id }}</td>
                    <td>{{ $escalation->escalated_from }}</td>
                    <td>{{ $escalation->escalated_to }}</td>
                    <td>{{ $escalation->reason }}</td>
                    <td>{{ $escalation->escalation_level }}</td>
                    <td>{{ $escalation->timestamp }}</td>
                    <td>{{ $escalation->notes }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['escalations.destroy', $escalation->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('escalations.show', [$escalation->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('escalations.edit', [$escalation->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $escalations])
        </div>
    </div>
</div>
