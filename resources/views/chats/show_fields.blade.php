<!-- Session Id Field -->
<div class="col-sm-12">
    {!! Form::label('session_id', 'Session Id:') !!}
    <p>{{ $chat->session_id }}</p>
</div>

<!-- Customer Id Field -->
<div class="col-sm-12">
    {!! Form::label('customer_id', 'Customer Id:') !!}
    <p>{{ $chat->customer_id }}</p>
</div>

<!-- Agent Id Field -->
<div class="col-sm-12">
    {!! Form::label('agent_id', 'Agent Id:') !!}
    <p>{{ $chat->agent_id }}</p>
</div>

<!-- Message Field -->
<div class="col-sm-12">
    {!! Form::label('message', 'Message:') !!}
    <p>{{ $chat->message }}</p>
</div>

<!-- Timestamp Field -->
<div class="col-sm-12">
    {!! Form::label('timestamp', 'Timestamp:') !!}
    <p>{{ $chat->timestamp }}</p>
</div>

<!-- Channel Field -->
<div class="col-sm-12">
    {!! Form::label('channel', 'Channel:') !!}
    <p>{{ $chat->channel }}</p>
</div>

