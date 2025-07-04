<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="surveys-table">
            <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Target Audience</th>
                <th>Channel</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Status</th>
                <th>Created By</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($surveys as $survey)
                <tr>
                    <td>{{ $survey->title }}</td>
                    <td>{{ $survey->description }}</td>
                    <td>{{ $survey->target_audience }}</td>
                    <td>{{ $survey->channel }}</td>
                    <td>{{ $survey->start_date }}</td>
                    <td>{{ $survey->end_date }}</td>
                    <td>{{ $survey->status }}</td>
                    <td>{{ $survey->created_by }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['surveys.destroy', $survey->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('surveys.show', [$survey->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('surveys.edit', [$survey->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $surveys])
        </div>
    </div>
</div>
