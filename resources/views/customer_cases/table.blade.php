<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="customer_cases-table">
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
            @foreach($customerCases as $customerCase)
                <tr>
                    <td>{{ $customerCase->customer_id }}</td>
                    <td>{{ $customerCase->agent_id }}</td>
                    <td>{{ $customerCase->supervisor_id }}</td>
                    <td>{{ $customerCase->department_id }}</td>
                    <td>{{ $customerCase->case_number }}</td>
                    <td>{{ $customerCase->issue }}</td>
                    <td>{{ $customerCase->notes }}</td>
                    <td>{{ $customerCase->category }}</td>
                    <td>{{ $customerCase->status }}</td>
                    <td>{{ $customerCase->priority }}</td>
                    <td>{{ $customerCase->channel }}</td>
                    <td>{{ $customerCase->opened_at }}</td>
                    <td>{{ $customerCase->closed_at }}</td>
                    <td>{{ $customerCase->resolution_details }}</td>
                    <td>{{ $customerCase->satisfaction_score }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['customerCases.destroy', $customerCase->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('customerCases.show', [$customerCase->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('customerCases.edit', [$customerCase->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $customerCases])
        </div>
    </div>
</div>
