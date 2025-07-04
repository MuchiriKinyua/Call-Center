<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="workflows-table">
            <thead>
            <tr>
                <th>Full Name</th>
                <th>Description</th>
                <th>Trigger Event</th>
                <th>Conditions</th>
                <th>Actions</th>
                <th>Is Active</th>
                <th>Priority</th>
                <th>Created By</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($workflows as $workflow)
                <tr>
                    <td>{{ $workflow->full_name }}</td>
                    <td>{{ $workflow->description }}</td>
                    <td>{{ $workflow->trigger_event }}</td>
                    <td>{{ $workflow->conditions }}</td>
                    <td>{{ $workflow->actions }}</td>
                    <td>{{ $workflow->is_active }}</td>
                    <td>{{ $workflow->priority }}</td>
                    <td>{{ $workflow->created_by }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['workflows.destroy', $workflow->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('workflows.show', [$workflow->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('workflows.edit', [$workflow->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $workflows])
        </div>
    </div>
</div>
