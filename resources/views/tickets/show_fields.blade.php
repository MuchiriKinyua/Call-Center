<!-- Customer Id Field -->
<div class="col-sm-12">
    {!! Form::label('customer_id', 'Customer Id:') !!}
    <p>{{ $ticket->customer_id }}</p>
</div>

<!-- Agent Id Field -->
<div class="col-sm-12">
    {!! Form::label('agent_id', 'Agent Id:') !!}
    <p>{{ $ticket->agent_id }}</p>
</div>

<!-- Supervisor Id Field -->
<div class="col-sm-12">
    {!! Form::label('supervisor_id', 'Supervisor Id:') !!}
    <p>{{ $ticket->supervisor_id }}</p>
</div>

<!-- Subject Field -->
<div class="col-sm-12">
    {!! Form::label('subject', 'Subject:') !!}
    <p>{{ $ticket->subject }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $ticket->description }}</p>
</div>

<!-- Category Field -->
<div class="col-sm-12">
    {!! Form::label('category', 'Category:') !!}
    <p>{{ $ticket->category }}</p>
</div>

<!-- Priority Field -->
<div class="col-sm-12">
    {!! Form::label('priority', 'Priority:') !!}
    <p>{{ $ticket->priority }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $ticket->status }}</p>
</div>

<!-- Channel Field -->
<div class="col-sm-12">
    {!! Form::label('channel', 'Channel:') !!}
    <p>{{ $ticket->channel }}</p>
</div>

<!-- Resolved At Field -->
<div class="col-sm-12">
    {!! Form::label('resolved_at', 'Resolved At:') !!}
    <p>{{ $ticket->resolved_at }}</p>
</div>

<!-- Closed At Field -->
<div class="col-sm-12">
    {!! Form::label('closed_at', 'Closed At:') !!}
    <p>{{ $ticket->closed_at }}</p>
</div>

<!-- Notes Field -->
<div class="col-sm-12">
    {!! Form::label('notes', 'Notes:') !!}
    <p>{{ $ticket->notes }}</p>
</div>

