<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="customers-table">
            <thead>
            <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Alternative Phone</th>
                <th>Address</th>
                <th>Location</th>
                <th>Account Number</th>
                <th>Customer Type</th>
                <th>Created By</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($customers as $customer)
                <tr>
                    <td>{{ $customer->full_name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->phone }}</td>
                    <td>{{ $customer->alternative_phone }}</td>
                    <td>{{ $customer->address }}</td>
                    <td>{{ $customer->location }}</td>
                    <td>{{ $customer->account_number }}</td>
                    <td>{{ $customer->customer_type }}</td>
                    <td>{{ $customer->created_by }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['customers.destroy', $customer->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('customers.show', [$customer->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('customers.edit', [$customer->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $customers])
        </div>
    </div>
</div>
