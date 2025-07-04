<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="quality_assessments-table">
            <thead>
            <tr>
                <th>Agent Id</th>
                <th>Call Id</th>
                <th>Supervisor Id</th>
                <th>Assessment Date</th>
                <th>Score</th>
                <th>Notes</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($qualityAssessments as $qualityAssessment)
                <tr>
                    <td>{{ $qualityAssessment->agent_id }}</td>
                    <td>{{ $qualityAssessment->call_id }}</td>
                    <td>{{ $qualityAssessment->supervisor_id }}</td>
                    <td>{{ $qualityAssessment->assessment_date }}</td>
                    <td>{{ $qualityAssessment->score }}</td>
                    <td>{{ $qualityAssessment->notes }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['qualityAssessments.destroy', $qualityAssessment->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('qualityAssessments.show', [$qualityAssessment->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('qualityAssessments.edit', [$qualityAssessment->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $qualityAssessments])
        </div>
    </div>
</div>
