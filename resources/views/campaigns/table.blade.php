<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="campaigns-table">
            <thead>
            <tr>
                <th>Full Name</th>
                <th>Type</th>
                <th>Target Audience</th>
                <th>Scheduled Time</th>
                <th>Status</th>
                <th>Created By</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($campaigns as $campaign)
                <tr>
                    <td>{{ $campaign->full_name }}</td>
                    <td>{{ $campaign->type }}</td>
                    <td>{{ $campaign->target_audience }}</td>
                    <td>{{ $campaign->scheduled_time }}</td>
                    <td>{{ $campaign->status }}</td>
                    <td>{{ $campaign->created_by }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['campaigns.destroy', $campaign->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('campaigns.show', [$campaign->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('campaigns.edit', [$campaign->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $campaigns])
        </div>
    </div>
</div>
