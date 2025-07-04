<!-- Campaign Id Field -->
<div class="col-sm-12">
    {!! Form::label('campaign_id', 'Campaign Id:') !!}
    <p>{{ $dialer->campaign_id }}</p>
</div>

<!-- Full Name Field -->
<div class="col-sm-12">
    {!! Form::label('full_name', 'Full Name:') !!}
    <p>{{ $dialer->full_name }}</p>
</div>

<!-- Type Field -->
<div class="col-sm-12">
    {!! Form::label('type', 'Type:') !!}
    <p>{{ $dialer->type }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $dialer->status }}</p>
</div>

<!-- Max Concurrent Calls Field -->
<div class="col-sm-12">
    {!! Form::label('max_concurrent_calls', 'Max Concurrent Calls:') !!}
    <p>{{ $dialer->max_concurrent_calls }}</p>
</div>

<!-- Retry Attempts Field -->
<div class="col-sm-12">
    {!! Form::label('retry_attempts', 'Retry Attempts:') !!}
    <p>{{ $dialer->retry_attempts }}</p>
</div>

<!-- Retry Interval Field -->
<div class="col-sm-12">
    {!! Form::label('retry_interval', 'Retry Interval:') !!}
    <p>{{ $dialer->retry_interval }}</p>
</div>

<!-- Created By Field -->
<div class="col-sm-12">
    {!! Form::label('created_by', 'Created By:') !!}
    <p>{{ $dialer->created_by }}</p>
</div>

