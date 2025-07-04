<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="voice_recordings-table">
            <thead>
            <tr>
                <th>Call Id</th>
                <th>Recording Url</th>
                <th>Duration</th>
                <th>Format</th>
                <th>Transcription Text</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($voiceRecordings as $voiceRecording)
                <tr>
                    <td>{{ $voiceRecording->call_id }}</td>
                    <td>{{ $voiceRecording->recording_url }}</td>
                    <td>{{ $voiceRecording->duration }}</td>
                    <td>{{ $voiceRecording->format }}</td>
                    <td>{{ $voiceRecording->transcription_text }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['voiceRecordings.destroy', $voiceRecording->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('voiceRecordings.show', [$voiceRecording->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('voiceRecordings.edit', [$voiceRecording->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $voiceRecordings])
        </div>
    </div>
</div>
