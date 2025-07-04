<!-- Call Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('call_id', 'Call Id:') !!}
    {!! Form::number('call_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Recording Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('recording_url', 'Recording Url:') !!}
    {!! Form::text('recording_url', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Duration Field -->
<div class="form-group col-sm-6">
    {!! Form::label('duration', 'Duration:') !!}
    {!! Form::text('duration', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>

<!-- Format Field -->
<div class="form-group col-sm-6">
    {!! Form::label('format', 'Format:') !!}
    {!! Form::text('format', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Transcription Text Field -->
<div class="form-group col-sm-6">
    {!! Form::label('transcription_text', 'Transcription Text:') !!}
    {!! Form::text('transcription_text', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>