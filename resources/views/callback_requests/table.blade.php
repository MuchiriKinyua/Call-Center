<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="callback_requests-table">
            <thead>
            <tr>
                <th>Customer Name</th>
                <th>Phone</th>
                <th>Preferred Time</th>
                <th>Status</th>
                <th>Agent Id</th>
                <th>Source</th>
                <th>Notes</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($callbackRequests as $callbackRequest)
                <tr>
                    <td>{{ $callbackRequest->customer_name }}</td>
                    <td>{{ $callbackRequest->phone }}</td>
                    <td>{{ $callbackRequest->preferred_time }}</td>
                    <td>{{ $callbackRequest->status }}</td>
                    <td>{{ $callbackRequest->agent_id }}</td>
                    <td>{{ $callbackRequest->source }}</td>
                    <td>{{ $callbackRequest->notes }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['callbackRequests.destroy', $callbackRequest->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('callbackRequests.show', [$callbackRequest->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('callbackRequests.edit', [$callbackRequest->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $callbackRequests])
        </div>
    </div>
</div>
