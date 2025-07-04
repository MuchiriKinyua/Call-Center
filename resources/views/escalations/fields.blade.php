<!-- Ticket Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ticket_id', 'Ticket Id:') !!}
    {!! Form::number('ticket_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Escalated From Field -->
<div class="form-group col-sm-6">
    {!! Form::label('escalated_from', 'Escalated From:') !!}
    {!! Form::text('escalated_from', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Escalated To Field -->
<div class="form-group col-sm-6">
    {!! Form::label('escalated_to', 'Escalated To:') !!}
    {!! Form::text('escalated_to', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Reason Field -->
<div class="form-group col-sm-6">
    {!! Form::label('reason', 'Reason:') !!}
    {!! Form::text('reason', null, ['class' => 'form-control', 'maxlength' => 600, 'maxlength' => 600]) !!}
</div>

<!-- Escalation Level Field -->
<div class="form-group col-sm-6">
    {!! Form::label('escalation_level', 'Escalation Level:') !!}
    {!! Form::text('escalation_level', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Timestamp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('timestamp', 'Timestamp:') !!}
    {!! Form::text('timestamp', null, ['class' => 'form-control','id'=>'timestamp']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#timestamp').datepicker()
    </script>
@endpush

<!-- Notes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('notes', 'Notes:') !!}
    {!! Form::text('notes', null, ['class' => 'form-control', 'maxlength' => 600, 'maxlength' => 600]) !!}
</div>