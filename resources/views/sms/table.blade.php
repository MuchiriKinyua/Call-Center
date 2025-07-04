<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="sms-table">
            <thead>
            <tr>
                <th>Customer Id</th>
                <th>Agent Id</th>
                <th>Phone Number</th>
                <th>Message</th>
                <th>Timestamp</th>
                <th>Direction</th>
                <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($sms as $sms)
                <tr>
                    <td>{{ $sms->customer_id }}</td>
                    <td>{{ $sms->agent_id }}</td>
                    <td>{{ $sms->phone_number }}</td>
                    <td>{{ $sms->message }}</td>
                    <td>{{ $sms->timestamp }}</td>
                    <td>{{ $sms->direction }}</td>
                    <td>{{ $sms->status }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['sms.destroy', $sms->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('sms.show', [$sms->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('sms.edit', [$sms->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $sms])
        </div>
    </div>
</div>
