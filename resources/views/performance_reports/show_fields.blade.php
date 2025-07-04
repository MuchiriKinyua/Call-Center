<!-- Agent Id Field -->
<div class="col-sm-12">
    {!! Form::label('agent_id', 'Agent Id:') !!}
    <p>{{ $performanceReport->agent_id }}</p>
</div>

<!-- Supervisor Id Field -->
<div class="col-sm-12">
    {!! Form::label('supervisor_id', 'Supervisor Id:') !!}
    <p>{{ $performanceReport->supervisor_id }}</p>
</div>

<!-- Total Calls Handled Field -->
<div class="col-sm-12">
    {!! Form::label('total_calls_handled', 'Total Calls Handled:') !!}
    <p>{{ $performanceReport->total_calls_handled }}</p>
</div>

<!-- Average Call Duration Field -->
<div class="col-sm-12">
    {!! Form::label('average_call_duration', 'Average Call Duration:') !!}
    <p>{{ $performanceReport->average_call_duration }}</p>
</div>

<!-- Customer Satisfaction Score Field -->
<div class="col-sm-12">
    {!! Form::label('customer_satisfaction_score', 'Customer Satisfaction Score:') !!}
    <p>{{ $performanceReport->customer_satisfaction_score }}</p>
</div>

<!-- First Call Resolution Rate Field -->
<div class="col-sm-12">
    {!! Form::label('first_call_resolution_rate', 'First Call Resolution Rate:') !!}
    <p>{{ $performanceReport->first_call_resolution_rate }}</p>
</div>

<!-- Tickets Solved Field -->
<div class="col-sm-12">
    {!! Form::label('tickets_solved', 'Tickets Solved:') !!}
    <p>{{ $performanceReport->tickets_solved }}</p>
</div>

<!-- Feedback Score Field -->
<div class="col-sm-12">
    {!! Form::label('feedback_score', 'Feedback Score:') !!}
    <p>{{ $performanceReport->feedback_score }}</p>
</div>

<!-- Report Period Start Field -->
<div class="col-sm-12">
    {!! Form::label('report_period_start', 'Report Period Start:') !!}
    <p>{{ $performanceReport->report_period_start }}</p>
</div>

<!-- Report Period End Field -->
<div class="col-sm-12">
    {!! Form::label('report_period_end', 'Report Period End:') !!}
    <p>{{ $performanceReport->report_period_end }}</p>
</div>

