<!-- Agent Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('agent_id', 'Agent Id:') !!}
    {!! Form::number('agent_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Call Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('call_id', 'Call Id:') !!}
    {!! Form::number('call_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Supervisor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('supervisor_id', 'Supervisor Id:') !!}
    {!! Form::number('supervisor_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Assessment Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('assessment_date', 'Assessment Date:') !!}
    {!! Form::text('assessment_date', null, ['class' => 'form-control','id'=>'assessment_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#assessment_date').datepicker()
    </script>
@endpush

<!-- Score Field -->
<div class="form-group col-sm-6">
    {!! Form::label('score', 'Score:') !!}
    {!! Form::text('score', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>

<!-- Notes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('notes', 'Notes:') !!}
    {!! Form::text('notes', null, ['class' => 'form-control', 'maxlength' => 600, 'maxlength' => 600]) !!}
</div>