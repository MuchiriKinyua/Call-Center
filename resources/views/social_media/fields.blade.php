<!-- Ticket Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ticket_id', 'Ticket Id:') !!}
    {!! Form::number('ticket_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Interaction Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('interaction_id', 'Interaction Id:') !!}
    {!! Form::number('interaction_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Platform Field -->
<div class="form-group col-sm-6">
    {!! Form::label('platform', 'Platform:') !!}
    {!! Form::text('platform', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>

<!-- Username Field -->
<div class="form-group col-sm-6">
    {!! Form::label('username', 'Username:') !!}
    {!! Form::text('username', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Message Field -->
<div class="form-group col-sm-6">
    {!! Form::label('message', 'Message:') !!}
    {!! Form::text('message', null, ['class' => 'form-control', 'maxlength' => 600, 'maxlength' => 600]) !!}
</div>

<!-- Sentiment Label Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sentiment_label', 'Sentiment Label:') !!}
    {!! Form::text('sentiment_label', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>

<!-- Interaction Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('interaction_type', 'Interaction Type:') !!}
    {!! Form::text('interaction_type', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
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

<!-- Handled By Field -->
<div class="form-group col-sm-6">
    {!! Form::label('handled_by', 'Handled By:') !!}
    {!! Form::text('handled_by', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>