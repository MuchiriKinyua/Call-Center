<!-- Customer Id Field -->
<div class="col-sm-12">
    {!! Form::label('customer_id', 'Customer Id:') !!}
    <p>{{ $customerCase->customer_id }}</p>
</div>

<!-- Agent Id Field -->
<div class="col-sm-12">
    {!! Form::label('agent_id', 'Agent Id:') !!}
    <p>{{ $customerCase->agent_id }}</p>
</div>

<!-- Supervisor Id Field -->
<div class="col-sm-12">
    {!! Form::label('supervisor_id', 'Supervisor Id:') !!}
    <p>{{ $customerCase->supervisor_id }}</p>
</div>

<!-- Department Id Field -->
<div class="col-sm-12">
    {!! Form::label('department_id', 'Department Id:') !!}
    <p>{{ $customerCase->department_id }}</p>
</div>

<!-- Case Number Field -->
<div class="col-sm-12">
    {!! Form::label('case_number', 'Case Number:') !!}
    <p>{{ $customerCase->case_number }}</p>
</div>

<!-- Issue Field -->
<div class="col-sm-12">
    {!! Form::label('issue', 'Issue:') !!}
    <p>{{ $customerCase->issue }}</p>
</div>

<!-- Notes Field -->
<div class="col-sm-12">
    {!! Form::label('notes', 'Notes:') !!}
    <p>{{ $customerCase->notes }}</p>
</div>

<!-- Category Field -->
<div class="col-sm-12">
    {!! Form::label('category', 'Category:') !!}
    <p>{{ $customerCase->category }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $customerCase->status }}</p>
</div>

<!-- Priority Field -->
<div class="col-sm-12">
    {!! Form::label('priority', 'Priority:') !!}
    <p>{{ $customerCase->priority }}</p>
</div>

<!-- Channel Field -->
<div class="col-sm-12">
    {!! Form::label('channel', 'Channel:') !!}
    <p>{{ $customerCase->channel }}</p>
</div>

<!-- Opened At Field -->
<div class="col-sm-12">
    {!! Form::label('opened_at', 'Opened At:') !!}
    <p>{{ $customerCase->opened_at }}</p>
</div>

<!-- Closed At Field -->
<div class="col-sm-12">
    {!! Form::label('closed_at', 'Closed At:') !!}
    <p>{{ $customerCase->closed_at }}</p>
</div>

<!-- Resolution Details Field -->
<div class="col-sm-12">
    {!! Form::label('resolution_details', 'Resolution Details:') !!}
    <p>{{ $customerCase->resolution_details }}</p>
</div>

<!-- Satisfaction Score Field -->
<div class="col-sm-12">
    {!! Form::label('satisfaction_score', 'Satisfaction Score:') !!}
    <p>{{ $customerCase->satisfaction_score }}</p>
</div>

