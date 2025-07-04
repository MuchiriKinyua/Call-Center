<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Department Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('department_id', 'Department Id:') !!}
    {!! Form::number('department_id', null, ['class' => 'form-control']) !!}
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

<!-- Assigned Agents Count Field -->
<div class="form-group col-sm-6">
    {!! Form::label('assigned_agents_count', 'Assigned Agents Count:') !!}
    {!! Form::number('assigned_agents_count', null, ['class' => 'form-control']) !!}
</div>

<!-- Performance Rating Field -->
<div class="form-group col-sm-6">
    {!! Form::label('performance_rating', 'Performance Rating:') !!}
    {!! Form::number('performance_rating', null, ['class' => 'form-control']) !!}
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