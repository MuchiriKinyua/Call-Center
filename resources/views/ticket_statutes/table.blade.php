<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="ticket_statutes-table">
            <thead>
            <tr>
                <th>Ticket Id</th>
                <th>Full Name</th>
                <th>Description</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($ticketStatutes as $ticketStatute)
                <tr>
                    <td>{{ $ticketStatute->ticket_id }}</td>
                    <td>{{ $ticketStatute->full_name }}</td>
                    <td>{{ $ticketStatute->description }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['ticketStatutes.destroy', $ticketStatute->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('ticketStatutes.show', [$ticketStatute->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('ticketStatutes.edit', [$ticketStatute->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $ticketStatutes])
        </div>
    </div>
</div>
