<!-- Agent Id Field -->
<div class="col-sm-12">
    {!! Form::label('agent_id', 'Agent Id:') !!}
    <p>{{ $queue->agent_id }}</p>
</div>

<!-- Department Id Field -->
<div class="col-sm-12">
    {!! Form::label('department_id', 'Department Id:') !!}
    <p>{{ $queue->department_id }}</p>
</div>

<!-- Full Name Field -->
<div class="col-sm-12">
    {!! Form::label('full_name', 'Full Name:') !!}
    <p>{{ $queue->full_name }}</p>
</div>

<!-- Max Wait Time Field -->
<div class="col-sm-12">
    {!! Form::label('max_wait_time', 'Max Wait Time:') !!}
    <p>{{ $queue->max_wait_time }}</p>
</div>

<!-- Priority Level Field -->
<div class="col-sm-12">
    {!! Form::label('priority_level', 'Priority Level:') !!}
    <p>{{ $queue->priority_level }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $queue->status }}</p>
</div>

