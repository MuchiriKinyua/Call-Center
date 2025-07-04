<!-- Customer Name Field -->
<div class="col-sm-12">
    {!! Form::label('customer_name', 'Customer Name:') !!}
    <p>{{ $callbackRequest->customer_name }}</p>
</div>

<!-- Phone Field -->
<div class="col-sm-12">
    {!! Form::label('phone', 'Phone:') !!}
    <p>{{ $callbackRequest->phone }}</p>
</div>

<!-- Preferred Time Field -->
<div class="col-sm-12">
    {!! Form::label('preferred_time', 'Preferred Time:') !!}
    <p>{{ $callbackRequest->preferred_time }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $callbackRequest->status }}</p>
</div>

<!-- Agent Id Field -->
<div class="col-sm-12">
    {!! Form::label('agent_id', 'Agent Id:') !!}
    <p>{{ $callbackRequest->agent_id }}</p>
</div>

<!-- Source Field -->
<div class="col-sm-12">
    {!! Form::label('source', 'Source:') !!}
    <p>{{ $callbackRequest->source }}</p>
</div>

<!-- Notes Field -->
<div class="col-sm-12">
    {!! Form::label('notes', 'Notes:') !!}
    <p>{{ $callbackRequest->notes }}</p>
</div>

