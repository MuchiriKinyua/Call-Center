<!-- Ticket Id Field -->
<div class="col-sm-12">
    {!! Form::label('ticket_id', 'Ticket Id:') !!}
    <p>{{ $escalation->ticket_id }}</p>
</div>

<!-- Escalated From Field -->
<div class="col-sm-12">
    {!! Form::label('escalated_from', 'Escalated From:') !!}
    <p>{{ $escalation->escalated_from }}</p>
</div>

<!-- Escalated To Field -->
<div class="col-sm-12">
    {!! Form::label('escalated_to', 'Escalated To:') !!}
    <p>{{ $escalation->escalated_to }}</p>
</div>

<!-- Reason Field -->
<div class="col-sm-12">
    {!! Form::label('reason', 'Reason:') !!}
    <p>{{ $escalation->reason }}</p>
</div>

<!-- Escalation Level Field -->
<div class="col-sm-12">
    {!! Form::label('escalation_level', 'Escalation Level:') !!}
    <p>{{ $escalation->escalation_level }}</p>
</div>

<!-- Timestamp Field -->
<div class="col-sm-12">
    {!! Form::label('timestamp', 'Timestamp:') !!}
    <p>{{ $escalation->timestamp }}</p>
</div>

<!-- Notes Field -->
<div class="col-sm-12">
    {!! Form::label('notes', 'Notes:') !!}
    <p>{{ $escalation->notes }}</p>
</div>

