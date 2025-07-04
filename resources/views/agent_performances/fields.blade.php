<!-- Agent Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('agent_id', 'Agent Id:') !!}
    {!! Form::number('agent_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Calls Handled Field -->
<div class="form-group col-sm-6">
    {!! Form::label('calls_handled', 'Calls Handled:') !!}
    {!! Form::text('calls_handled', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Tickets Resolved Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tickets_resolved', 'Tickets Resolved:') !!}
    {!! Form::text('tickets_resolved', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Average Response Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('average_response_time', 'Average Response Time:') !!}
    {!! Form::text('average_response_time', null, ['class' => 'form-control']) !!}
</div>

<!-- Average Resolution Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('average_resolution_time', 'Average Resolution Time:') !!}
    {!! Form::number('average_resolution_time', null, ['class' => 'form-control']) !!}
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

<!-- Feedback Count Field -->
<div class="form-group col-sm-6">
    {!! Form::label('feedback_count', 'Feedback Count:') !!}
    {!! Form::text('feedback_count', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Performance Period Field -->
<div class="form-group col-sm-6">
    {!! Form::label('performance_period', 'Performance Period:') !!}
    {!! Form::text('performance_period', null, ['class' => 'form-control','id'=>'performance_period']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#performance_period').datepicker()
    </script>
@endpush