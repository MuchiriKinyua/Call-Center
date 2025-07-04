<!-- Customer Id Field -->
<div class="col-sm-12">
    {!! Form::label('customer_id', 'Customer Id:') !!}
    <p>{{ $sms->customer_id }}</p>
</div>

<!-- Agent Id Field -->
<div class="col-sm-12">
    {!! Form::label('agent_id', 'Agent Id:') !!}
    <p>{{ $sms->agent_id }}</p>
</div>

<!-- Phone Number Field -->
<div class="col-sm-12">
    {!! Form::label('phone_number', 'Phone Number:') !!}
    <p>{{ $sms->phone_number }}</p>
</div>

<!-- Message Field -->
<div class="col-sm-12">
    {!! Form::label('message', 'Message:') !!}
    <p>{{ $sms->message }}</p>
</div>

<!-- Timestamp Field -->
<div class="col-sm-12">
    {!! Form::label('timestamp', 'Timestamp:') !!}
    <p>{{ $sms->timestamp }}</p>
</div>

<!-- Direction Field -->
<div class="col-sm-12">
    {!! Form::label('direction', 'Direction:') !!}
    <p>{{ $sms->direction }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $sms->status }}</p>
</div>

