<!-- Customer Id Field -->
<div class="col-sm-12">
    {!! Form::label('customer_id', 'Customer Id:') !!}
    <p>{{ $whatsapp->customer_id }}</p>
</div>

<!-- Agent Id Field -->
<div class="col-sm-12">
    {!! Form::label('agent_id', 'Agent Id:') !!}
    <p>{{ $whatsapp->agent_id }}</p>
</div>

<!-- Phone Number Field -->
<div class="col-sm-12">
    {!! Form::label('phone_number', 'Phone Number:') !!}
    <p>{{ $whatsapp->phone_number }}</p>
</div>

<!-- Message Field -->
<div class="col-sm-12">
    {!! Form::label('message', 'Message:') !!}
    <p>{{ $whatsapp->message }}</p>
</div>

<!-- Media Url Field -->
<div class="col-sm-12">
    {!! Form::label('media_url', 'Media Url:') !!}
    <p>{{ $whatsapp->media_url }}</p>
</div>

<!-- Timestamp Field -->
<div class="col-sm-12">
    {!! Form::label('timestamp', 'Timestamp:') !!}
    <p>{{ $whatsapp->timestamp }}</p>
</div>

<!-- Direction Field -->
<div class="col-sm-12">
    {!! Form::label('direction', 'Direction:') !!}
    <p>{{ $whatsapp->direction }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $whatsapp->status }}</p>
</div>

