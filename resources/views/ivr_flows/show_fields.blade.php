<!-- Full Name Field -->
<div class="col-sm-12">
    {!! Form::label('full_name', 'Full Name:') !!}
    <p>{{ $ivrFlow->full_name }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $ivrFlow->description }}</p>
</div>

<!-- Json Structure Field -->
<div class="col-sm-12">
    {!! Form::label('json_structure', 'Json Structure:') !!}
    <p>{{ $ivrFlow->json_structure }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $ivrFlow->status }}</p>
</div>

<!-- Created By Field -->
<div class="col-sm-12">
    {!! Form::label('created_by', 'Created By:') !!}
    <p>{{ $ivrFlow->created_by }}</p>
</div>

