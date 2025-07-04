<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="whatsapps-table">
            <thead>
            <tr>
                <th>Customer Id</th>
                <th>Agent Id</th>
                <th>Phone Number</th>
                <th>Message</th>
                <th>Media Url</th>
                <th>Timestamp</th>
                <th>Direction</th>
                <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($whatsapps as $whatsapp)
                <tr>
                    <td>{{ $whatsapp->customer_id }}</td>
                    <td>{{ $whatsapp->agent_id }}</td>
                    <td>{{ $whatsapp->phone_number }}</td>
                    <td>{{ $whatsapp->message }}</td>
                    <td>{{ $whatsapp->media_url }}</td>
                    <td>{{ $whatsapp->timestamp }}</td>
                    <td>{{ $whatsapp->direction }}</td>
                    <td>{{ $whatsapp->status }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['whatsapps.destroy', $whatsapp->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('whatsapps.show', [$whatsapp->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('whatsapps.edit', [$whatsapp->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $whatsapps])
        </div>
    </div>
</div>
