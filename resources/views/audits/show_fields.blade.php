<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $audit->user_id }}</p>
</div>

<!-- Action Field -->
<div class="col-sm-12">
    {!! Form::label('action', 'Action:') !!}
    <p>{{ $audit->action }}</p>
</div>

<!-- Module Field -->
<div class="col-sm-12">
    {!! Form::label('module', 'Module:') !!}
    <p>{{ $audit->module }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $audit->description }}</p>
</div>

<!-- Ip Address Field -->
<div class="col-sm-12">
    {!! Form::label('ip_address', 'Ip Address:') !!}
    <p>{{ $audit->ip_address }}</p>
</div>

