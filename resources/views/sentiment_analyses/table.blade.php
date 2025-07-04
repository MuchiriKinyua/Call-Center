<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="sentiment_analyses-table">
            <thead>
            <tr>
                <th>Interaction Id</th>
                <th>Channel</th>
                <th>Content</th>
                <th>Sentiment Score</th>
                <th>Analyzed At</th>
                <th>Language</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($sentimentAnalyses as $sentimentAnalysis)
                <tr>
                    <td>{{ $sentimentAnalysis->interaction_id }}</td>
                    <td>{{ $sentimentAnalysis->channel }}</td>
                    <td>{{ $sentimentAnalysis->content }}</td>
                    <td>{{ $sentimentAnalysis->sentiment_score }}</td>
                    <td>{{ $sentimentAnalysis->analyzed_at }}</td>
                    <td>{{ $sentimentAnalysis->language }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['sentimentAnalyses.destroy', $sentimentAnalysis->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('sentimentAnalyses.show', [$sentimentAnalysis->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('sentimentAnalyses.edit', [$sentimentAnalysis->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $sentimentAnalyses])
        </div>
    </div>
</div>
