<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $notificationSetting->user_id }}</p>
</div>

<!-- Channel Field -->
<div class="col-sm-12">
    {!! Form::label('channel', 'Channel:') !!}
    <p>{{ $notificationSetting->channel }}</p>
</div>

<!-- Type Field -->
<div class="col-sm-12">
    {!! Form::label('type', 'Type:') !!}
    <p>{{ $notificationSetting->type }}</p>
</div>

<!-- Is Enabled Field -->
<div class="col-sm-12">
    {!! Form::label('is_enabled', 'Is Enabled:') !!}
    <p>{{ $notificationSetting->is_enabled }}</p>
</div>

<!-- Preferred Time Field -->
<div class="col-sm-12">
    {!! Form::label('preferred_time', 'Preferred Time:') !!}
    <p>{{ $notificationSetting->preferred_time }}</p>
</div>

