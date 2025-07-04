<!-- Call Id Field -->
<div class="col-sm-12">
    {!! Form::label('call_id', 'Call Id:') !!}
    <p>{{ $voiceRecording->call_id }}</p>
</div>

<!-- Recording Url Field -->
<div class="col-sm-12">
    {!! Form::label('recording_url', 'Recording Url:') !!}
    <p>{{ $voiceRecording->recording_url }}</p>
</div>

<!-- Duration Field -->
<div class="col-sm-12">
    {!! Form::label('duration', 'Duration:') !!}
    <p>{{ $voiceRecording->duration }}</p>
</div>

<!-- Format Field -->
<div class="col-sm-12">
    {!! Form::label('format', 'Format:') !!}
    <p>{{ $voiceRecording->format }}</p>
</div>

<!-- Transcription Text Field -->
<div class="col-sm-12">
    {!! Form::label('transcription_text', 'Transcription Text:') !!}
    <p>{{ $voiceRecording->transcription_text }}</p>
</div>

