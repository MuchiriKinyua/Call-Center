<!-- Full Name Field -->
<div class="col-sm-12">
    {!! Form::label('full_name', 'Full Name:') !!}
    <p>{{ $campaign->full_name }}</p>
</div>

<!-- Type Field -->
<div class="col-sm-12">
    {!! Form::label('type', 'Type:') !!}
    <p>{{ $campaign->type }}</p>
</div>

<!-- Target Audience Field -->
<div class="col-sm-12">
    {!! Form::label('target_audience', 'Target Audience:') !!}
    <p>{{ $campaign->target_audience }}</p>
</div>

<!-- Scheduled Time Field -->
<div class="col-sm-12">
    {!! Form::label('scheduled_time', 'Scheduled Time:') !!}
    <p>{{ $campaign->scheduled_time }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $campaign->status }}</p>
</div>

<!-- Created By Field -->
<div class="col-sm-12">
    {!! Form::label('created_by', 'Created By:') !!}
    <p>{{ $campaign->created_by }}</p>
</div>

