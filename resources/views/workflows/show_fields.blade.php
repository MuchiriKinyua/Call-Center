<!-- Full Name Field -->
<div class="col-sm-12">
    {!! Form::label('full_name', 'Full Name:') !!}
    <p>{{ $workflow->full_name }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $workflow->description }}</p>
</div>

<!-- Trigger Event Field -->
<div class="col-sm-12">
    {!! Form::label('trigger_event', 'Trigger Event:') !!}
    <p>{{ $workflow->trigger_event }}</p>
</div>

<!-- Conditions Field -->
<div class="col-sm-12">
    {!! Form::label('conditions', 'Conditions:') !!}
    <p>{{ $workflow->conditions }}</p>
</div>

<!-- Actions Field -->
<div class="col-sm-12">
    {!! Form::label('actions', 'Actions:') !!}
    <p>{{ $workflow->actions }}</p>
</div>

<!-- Is Active Field -->
<div class="col-sm-12">
    {!! Form::label('is_active', 'Is Active:') !!}
    <p>{{ $workflow->is_active }}</p>
</div>

<!-- Priority Field -->
<div class="col-sm-12">
    {!! Form::label('priority', 'Priority:') !!}
    <p>{{ $workflow->priority }}</p>
</div>

<!-- Created By Field -->
<div class="col-sm-12">
    {!! Form::label('created_by', 'Created By:') !!}
    <p>{{ $workflow->created_by }}</p>
</div>

