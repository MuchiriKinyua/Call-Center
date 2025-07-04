<!-- Customer Id Field -->
<div class="col-sm-12">
    {!! Form::label('customer_id', 'Customer Id:') !!}
    <p>{{ $email->customer_id }}</p>
</div>

<!-- Agent Id Field -->
<div class="col-sm-12">
    {!! Form::label('agent_id', 'Agent Id:') !!}
    <p>{{ $email->agent_id }}</p>
</div>

<!-- Subject Field -->
<div class="col-sm-12">
    {!! Form::label('subject', 'Subject:') !!}
    <p>{{ $email->subject }}</p>
</div>

<!-- Body Field -->
<div class="col-sm-12">
    {!! Form::label('body', 'Body:') !!}
    <p>{{ $email->body }}</p>
</div>

<!-- Timestamp Field -->
<div class="col-sm-12">
    {!! Form::label('timestamp', 'Timestamp:') !!}
    <p>{{ $email->timestamp }}</p>
</div>

<!-- Direction Field -->
<div class="col-sm-12">
    {!! Form::label('direction', 'Direction:') !!}
    <p>{{ $email->direction }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $email->status }}</p>
</div>

