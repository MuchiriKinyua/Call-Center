<!-- Title Field -->
<div class="col-sm-12">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $survey->title }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $survey->description }}</p>
</div>

<!-- Target Audience Field -->
<div class="col-sm-12">
    {!! Form::label('target_audience', 'Target Audience:') !!}
    <p>{{ $survey->target_audience }}</p>
</div>

<!-- Channel Field -->
<div class="col-sm-12">
    {!! Form::label('channel', 'Channel:') !!}
    <p>{{ $survey->channel }}</p>
</div>

<!-- Start Date Field -->
<div class="col-sm-12">
    {!! Form::label('start_date', 'Start Date:') !!}
    <p>{{ $survey->start_date }}</p>
</div>

<!-- End Date Field -->
<div class="col-sm-12">
    {!! Form::label('end_date', 'End Date:') !!}
    <p>{{ $survey->end_date }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $survey->status }}</p>
</div>

<!-- Created By Field -->
<div class="col-sm-12">
    {!! Form::label('created_by', 'Created By:') !!}
    <p>{{ $survey->created_by }}</p>
</div>

