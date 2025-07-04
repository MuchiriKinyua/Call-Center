<!-- Agent Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('agent_id', 'Agent Id:') !!}
    {!! Form::number('agent_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Supervisor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('supervisor_id', 'Supervisor Id:') !!}
    {!! Form::number('supervisor_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Calls Handled Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total_calls_handled', 'Total Calls Handled:') !!}
    {!! Form::text('total_calls_handled', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>

<!-- Average Call Duration Field -->
<div class="form-group col-sm-6">
    {!! Form::label('average_call_duration', 'Average Call Duration:') !!}
    {!! Form::text('average_call_duration', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>

<!-- Customer Satisfaction Score Field -->
<div class="form-group col-sm-6">
    {!! Form::label('customer_satisfaction_score', 'Customer Satisfaction Score:') !!}
    {!! Form::text('customer_satisfaction_score', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- First Call Resolution Rate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('first_call_resolution_rate', 'First Call Resolution Rate:') !!}
    {!! Form::text('first_call_resolution_rate', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Tickets Solved Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tickets_solved', 'Tickets Solved:') !!}
    {!! Form::text('tickets_solved', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Feedback Score Field -->
<div class="form-group col-sm-6">
    {!! Form::label('feedback_score', 'Feedback Score:') !!}
    {!! Form::text('feedback_score', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Report Period Start Field -->
<div class="form-group col-sm-6">
    {!! Form::label('report_period_start', 'Report Period Start:') !!}
    {!! Form::text('report_period_start', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Report Period End Field -->
<div class="form-group col-sm-6">
    {!! Form::label('report_period_end', 'Report Period End:') !!}
    {!! Form::text('report_period_end', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>