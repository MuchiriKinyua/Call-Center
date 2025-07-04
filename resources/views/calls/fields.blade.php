<!-- Call Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('call_id', 'Call Id:') !!}
    {!! Form::number('call_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Ticket Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ticket_id', 'Ticket Id:') !!}
    {!! Form::number('ticket_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Customer Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('customer_id', 'Customer Id:') !!}
    {!! Form::number('customer_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Agent Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('agent_id', 'Agent Id:') !!}
    {!! Form::number('agent_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Start Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('start_time', 'Start Time:') !!}
    {!! Form::text('start_time', null, ['class' => 'form-control','id'=>'start_time']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#start_time').datepicker()
    </script>
@endpush

<!-- End Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('end_time', 'End Time:') !!}
    {!! Form::text('end_time', null, ['class' => 'form-control','id'=>'end_time']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#end_time').datepicker()
    </script>
@endpush

<!-- Duration Field -->
<div class="form-group col-sm-6">
    {!! Form::label('duration', 'Duration:') !!}
    {!! Form::text('duration', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>

<!-- Call Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('call_type', 'Call Type:') !!}
    {!! Form::text('call_type', null, ['class' => 'form-control', 'maxlength' => 50, 'maxlength' => 50]) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>

<!-- Recording Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('recording_url', 'Recording Url:') !!}
    {!! Form::text('recording_url', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>