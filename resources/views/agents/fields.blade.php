<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Supervisor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('supervisor_id', 'Supervisor Id:') !!}
    {!! Form::number('supervisor_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Department Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('department_id', 'Department Id:') !!}
    {!! Form::number('department_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Agent Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('agent_code', 'Agent Code:') !!}
    {!! Form::text('agent_code', null, ['class' => 'form-control', 'maxlength' => 50, 'maxlength' => 50]) !!}
</div>

<!-- Full Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('full_name', 'Full Name:') !!}
    {!! Form::text('full_name', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>

<!-- Login Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('login_time', 'Login Time:') !!}
    {!! Form::text('login_time', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>

<!-- Logout Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('logout_time', 'Logout Time:') !!}
    {!! Form::text('logout_time', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>

<!-- Current Call Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('current_call_status', 'Current Call Status:') !!}
    {!! Form::text('current_call_status', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>

<!-- Total Calls Handled Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total_calls_handled', 'Total Calls Handled:') !!}
    {!! Form::text('total_calls_handled', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>

<!-- Performance Score Field -->
<div class="form-group col-sm-6">
    {!! Form::label('performance_score', 'Performance Score:') !!}
    {!! Form::text('performance_score', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>