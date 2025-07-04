<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $login->user_id }}</p>
</div>

<!-- Login Time Field -->
<div class="col-sm-12">
    {!! Form::label('login_time', 'Login Time:') !!}
    <p>{{ $login->login_time }}</p>
</div>

<!-- Logout Time Field -->
<div class="col-sm-12">
    {!! Form::label('logout_time', 'Logout Time:') !!}
    <p>{{ $login->logout_time }}</p>
</div>

<!-- Ip Address Field -->
<div class="col-sm-12">
    {!! Form::label('ip_address', 'Ip Address:') !!}
    <p>{{ $login->ip_address }}</p>
</div>

<!-- Device Field -->
<div class="col-sm-12">
    {!! Form::label('device', 'Device:') !!}
    <p>{{ $login->device }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $login->status }}</p>
</div>

<!-- Location Field -->
<div class="col-sm-12">
    {!! Form::label('location', 'Location:') !!}
    <p>{{ $login->location }}</p>
</div>

