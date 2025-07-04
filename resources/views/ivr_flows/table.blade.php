<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="ivr_flows-table">
            <thead>
            <tr>
                <th>Full Name</th>
                <th>Description</th>
                <th>Json Structure</th>
                <th>Status</th>
                <th>Created By</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($ivrFlows as $ivrFlow)
                <tr>
                    <td>{{ $ivrFlow->full_name }}</td>
                    <td>{{ $ivrFlow->description }}</td>
                    <td>{{ $ivrFlow->json_structure }}</td>
                    <td>{{ $ivrFlow->status }}</td>
                    <td>{{ $ivrFlow->created_by }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['ivrFlows.destroy', $ivrFlow->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('ivrFlows.show', [$ivrFlow->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('ivrFlows.edit', [$ivrFlow->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $ivrFlows])
        </div>
    </div>
</div>
