<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="chats-table">
            <thead>
            <tr>
                <th>Session Id</th>
                <th>Customer Id</th>
                <th>Agent Id</th>
                <th>Message</th>
                <th>Timestamp</th>
                <th>Channel</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($chats as $chat)
                <tr>
                    <td>{{ $chat->session_id }}</td>
                    <td>{{ $chat->customer_id }}</td>
                    <td>{{ $chat->agent_id }}</td>
                    <td>{{ $chat->message }}</td>
                    <td>{{ $chat->timestamp }}</td>
                    <td>{{ $chat->channel }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['chats.destroy', $chat->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('chats.show', [$chat->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('chats.edit', [$chat->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $chats])
        </div>
    </div>
</div>
