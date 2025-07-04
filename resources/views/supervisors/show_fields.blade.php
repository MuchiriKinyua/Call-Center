<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $supervisor->user_id }}</p>
</div>

<!-- Department Id Field -->
<div class="col-sm-12">
    {!! Form::label('department_id', 'Department Id:') !!}
    <p>{{ $supervisor->department_id }}</p>
</div>

<!-- Full Name Field -->
<div class="col-sm-12">
    {!! Form::label('full_name', 'Full Name:') !!}
    <p>{{ $supervisor->full_name }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $supervisor->email }}</p>
</div>

<!-- Phone Field -->
<div class="col-sm-12">
    {!! Form::label('phone', 'Phone:') !!}
    <p>{{ $supervisor->phone }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $supervisor->status }}</p>
</div>

<!-- Assigned Agents Count Field -->
<div class="col-sm-12">
    {!! Form::label('assigned_agents_count', 'Assigned Agents Count:') !!}
    <p>{{ $supervisor->assigned_agents_count }}</p>
</div>

<!-- Performance Rating Field -->
<div class="col-sm-12">
    {!! Form::label('performance_rating', 'Performance Rating:') !!}
    <p>{{ $supervisor->performance_rating }}</p>
</div>

<!-- Login Time Field -->
<div class="col-sm-12">
    {!! Form::label('login_time', 'Login Time:') !!}
    <p>{{ $supervisor->login_time }}</p>
</div>

<!-- Logout Time Field -->
<div class="col-sm-12">
    {!! Form::label('logout_time', 'Logout Time:') !!}
    <p>{{ $supervisor->logout_time }}</p>
</div>

