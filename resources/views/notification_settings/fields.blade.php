<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Channel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('channel', 'Channel:') !!}
    {!! Form::text('channel', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Type:') !!}
    {!! Form::text('type', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Is Enabled Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_enabled', 'Is Enabled:') !!}
    {!! Form::text('is_enabled', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Preferred Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('preferred_time', 'Preferred Time:') !!}
    {!! Form::text('preferred_time', null, ['class' => 'form-control']) !!}
</div>