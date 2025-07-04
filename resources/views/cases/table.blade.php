<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="cases-table">
            <thead>
            <tr>
                <th>Customer Id</th>
                <th>Agent Id</th>
                <th>Supervisor Id</th>
                <th>Department Id</th>
                <th>Case Number</th>
                <th>Issue</th>
                <th>Notes</th>
                <th>Category</th>
                <th>Status</th>
                <th>Priority</th>
                <th>Channel</th>
                <th>Opened At</th>
                <th>Closed At</th>
                <th>Resolution Details</th>
                <th>Satisfaction Score</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cases as $case)
                <tr>
                    <td>{{ $case->customer_id }}</td>
                    <td>{{ $case->agent_id }}</td>
                    <td>{{ $case->supervisor_id }}</td>
                    <td>{{ $case->department_id }}</td>
                    <td>{{ $case->case_number }}</td>
                    <td>{{ $case->issue }}</td>
                    <td>{{ $case->notes }}</td>
                    <td>{{ $case->category }}</td>
                    <td>{{ $case->status }}</td>
                    <td>{{ $case->priority }}</td>
                    <td>{{ $case->channel }}</td>
                    <td>{{ $case->opened_at }}</td>
                    <td>{{ $case->closed_at }}</td>
                    <td>{{ $case->resolution_details }}</td>
                    <td>{{ $case->satisfaction_score }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['cases.destroy', $case->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('cases.show', [$case->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('cases.edit', [$case->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $cases])
        </div>
    </div>
</div>
