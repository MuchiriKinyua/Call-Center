<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="emails-table">
            <thead>
            <tr>
                <th>Customer Id</th>
                <th>Agent Id</th>
                <th>Subject</th>
                <th>Body</th>
                <th>Timestamp</th>
                <th>Direction</th>
                <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($emails as $email)
                <tr>
                    <td>{{ $email->customer_id }}</td>
                    <td>{{ $email->agent_id }}</td>
                    <td>{{ $email->subject }}</td>
                    <td>{{ $email->body }}</td>
                    <td>{{ $email->timestamp }}</td>
                    <td>{{ $email->direction }}</td>
                    <td>{{ $email->status }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['emails.destroy', $email->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('emails.show', [$email->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('emails.edit', [$email->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $emails])
        </div>
    </div>
</div>
