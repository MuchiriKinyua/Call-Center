<!-- Agent Id Field -->
<div class="col-sm-12">
    {!! Form::label('agent_id', 'Agent Id:') !!}
    <p>{{ $agentPerformance->agent_id }}</p>
</div>

<!-- Calls Handled Field -->
<div class="col-sm-12">
    {!! Form::label('calls_handled', 'Calls Handled:') !!}
    <p>{{ $agentPerformance->calls_handled }}</p>
</div>

<!-- Tickets Resolved Field -->
<div class="col-sm-12">
    {!! Form::label('tickets_resolved', 'Tickets Resolved:') !!}
    <p>{{ $agentPerformance->tickets_resolved }}</p>
</div>

<!-- Average Response Time Field -->
<div class="col-sm-12">
    {!! Form::label('average_response_time', 'Average Response Time:') !!}
    <p>{{ $agentPerformance->average_response_time }}</p>
</div>

<!-- Average Resolution Time Field -->
<div class="col-sm-12">
    {!! Form::label('average_resolution_time', 'Average Resolution Time:') !!}
    <p>{{ $agentPerformance->average_resolution_time }}</p>
</div>

<!-- Customer Satisfaction Score Field -->
<div class="col-sm-12">
    {!! Form::label('customer_satisfaction_score', 'Customer Satisfaction Score:') !!}
    <p>{{ $agentPerformance->customer_satisfaction_score }}</p>
</div>

<!-- First Call Resolution Rate Field -->
<div class="col-sm-12">
    {!! Form::label('first_call_resolution_rate', 'First Call Resolution Rate:') !!}
    <p>{{ $agentPerformance->first_call_resolution_rate }}</p>
</div>

<!-- Feedback Count Field -->
<div class="col-sm-12">
    {!! Form::label('feedback_count', 'Feedback Count:') !!}
    <p>{{ $agentPerformance->feedback_count }}</p>
</div>

<!-- Performance Period Field -->
<div class="col-sm-12">
    {!! Form::label('performance_period', 'Performance Period:') !!}
    <p>{{ $agentPerformance->performance_period }}</p>
</div>

