<!-- Call Id Field -->
<div class="col-sm-12">
    {!! Form::label('call_id', 'Call Id:') !!}
    <p>{{ $call->call_id }}</p>
</div>

<!-- Ticket Id Field -->
<div class="col-sm-12">
    {!! Form::label('ticket_id', 'Ticket Id:') !!}
    <p>{{ $call->ticket_id }}</p>
</div>

<!-- Customer Id Field -->
<div class="col-sm-12">
    {!! Form::label('customer_id', 'Customer Id:') !!}
    <p>{{ $call->customer_id }}</p>
</div>

<!-- Agent Id Field -->
<div class="col-sm-12">
    {!! Form::label('agent_id', 'Agent Id:') !!}
    <p>{{ $call->agent_id }}</p>
</div>

<!-- Start Time Field -->
<div class="col-sm-12">
    {!! Form::label('start_time', 'Start Time:') !!}
    <p>{{ $call->start_time }}</p>
</div>

<!-- End Time Field -->
<div class="col-sm-12">
    {!! Form::label('end_time', 'End Time:') !!}
    <p>{{ $call->end_time }}</p>
</div>

<!-- Duration Field -->
<div class="col-sm-12">
    {!! Form::label('duration', 'Duration:') !!}
    <p>{{ $call->duration }}</p>
</div>

<!-- Call Type Field -->
<div class="col-sm-12">
    {!! Form::label('call_type', 'Call Type:') !!}
    <p>{{ $call->call_type }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $call->status }}</p>
</div>

<!-- Recording Url Field -->
<div class="col-sm-12">
    {!! Form::label('recording_url', 'Recording Url:') !!}
    <p>{{ $call->recording_url }}</p>
</div>

