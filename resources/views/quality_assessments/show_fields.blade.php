<!-- Agent Id Field -->
<div class="col-sm-12">
    {!! Form::label('agent_id', 'Agent Id:') !!}
    <p>{{ $qualityAssessment->agent_id }}</p>
</div>

<!-- Call Id Field -->
<div class="col-sm-12">
    {!! Form::label('call_id', 'Call Id:') !!}
    <p>{{ $qualityAssessment->call_id }}</p>
</div>

<!-- Supervisor Id Field -->
<div class="col-sm-12">
    {!! Form::label('supervisor_id', 'Supervisor Id:') !!}
    <p>{{ $qualityAssessment->supervisor_id }}</p>
</div>

<!-- Assessment Date Field -->
<div class="col-sm-12">
    {!! Form::label('assessment_date', 'Assessment Date:') !!}
    <p>{{ $qualityAssessment->assessment_date }}</p>
</div>

<!-- Score Field -->
<div class="col-sm-12">
    {!! Form::label('score', 'Score:') !!}
    <p>{{ $qualityAssessment->score }}</p>
</div>

<!-- Notes Field -->
<div class="col-sm-12">
    {!! Form::label('notes', 'Notes:') !!}
    <p>{{ $qualityAssessment->notes }}</p>
</div>

