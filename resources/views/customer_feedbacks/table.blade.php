<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="customer_feedbacks-table">
            <thead>
            <tr>
                <th>Ticket Id</th>
                <th>Customer Id</th>
                <th>Rating</th>
                <th>Comments</th>
                <th>Submitted At</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($customerFeedbacks as $customerFeedback)
                <tr>
                    <td>{{ $customerFeedback->ticket_id }}</td>
                    <td>{{ $customerFeedback->customer_id }}</td>
                    <td>{{ $customerFeedback->rating }}</td>
                    <td>{{ $customerFeedback->comments }}</td>
                    <td>{{ $customerFeedback->submitted_at }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['customerFeedbacks.destroy', $customerFeedback->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('customerFeedbacks.show', [$customerFeedback->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('customerFeedbacks.edit', [$customerFeedback->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $customerFeedbacks])
        </div>
    </div>
</div>
