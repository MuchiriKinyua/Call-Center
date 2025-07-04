<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $agent->user_id }}</p>
</div>

<!-- Supervisor Id Field -->
<div class="col-sm-12">
    {!! Form::label('supervisor_id', 'Supervisor Id:') !!}
    <p>{{ $agent->supervisor_id }}</p>
</div>

<!-- Department Id Field -->
<div class="col-sm-12">
    {!! Form::label('department_id', 'Department Id:') !!}
    <p>{{ $agent->department_id }}</p>
</div>

<!-- Agent Code Field -->
<div class="col-sm-12">
    {!! Form::label('agent_code', 'Agent Code:') !!}
    <p>{{ $agent->agent_code }}</p>
</div>

<!-- Full Name Field -->
<div class="col-sm-12">
    {!! Form::label('full_name', 'Full Name:') !!}
    <p>{{ $agent->full_name }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $agent->email }}</p>
</div>

<!-- Phone Field -->
<div class="col-sm-12">
    {!! Form::label('phone', 'Phone:') !!}
    <p>{{ $agent->phone }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $agent->status }}</p>
</div>

<!-- Login Time Field -->
<div class="col-sm-12">
    {!! Form::label('login_time', 'Login Time:') !!}
    <p>{{ $agent->login_time }}</p>
</div>

<!-- Logout Time Field -->
<div class="col-sm-12">
    {!! Form::label('logout_time', 'Logout Time:') !!}
    <p>{{ $agent->logout_time }}</p>
</div>

<!-- Current Call Status Field -->
<div class="col-sm-12">
    {!! Form::label('current_call_status', 'Current Call Status:') !!}
    <p>{{ $agent->current_call_status }}</p>
</div>

<!-- Total Calls Handled Field -->
<div class="col-sm-12">
    {!! Form::label('total_calls_handled', 'Total Calls Handled:') !!}
    <p>{{ $agent->total_calls_handled }}</p>
</div>

<!-- Performance Score Field -->
<div class="col-sm-12">
    {!! Form::label('performance_score', 'Performance Score:') !!}
    <p>{{ $agent->performance_score }}</p>
</div>

