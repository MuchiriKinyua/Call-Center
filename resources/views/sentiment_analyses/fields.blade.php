<!-- Interaction Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('interaction_id', 'Interaction Id:') !!}
    {!! Form::number('interaction_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Channel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('channel', 'Channel:') !!}
    {!! Form::text('channel', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>

<!-- Content Field -->
<div class="form-group col-sm-6">
    {!! Form::label('content', 'Content:') !!}
    {!! Form::text('content', null, ['class' => 'form-control', 'maxlength' => 1000, 'maxlength' => 1000]) !!}
</div>

<!-- Sentiment Score Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sentiment_score', 'Sentiment Score:') !!}
    {!! Form::text('sentiment_score', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>

<!-- Analyzed At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('analyzed_at', 'Analyzed At:') !!}
    {!! Form::text('analyzed_at', null, ['class' => 'form-control', 'maxlength' => 20, 'maxlength' => 20]) !!}
</div>

<!-- Language Field -->
<div class="form-group col-sm-6">
    {!! Form::label('language', 'Language:') !!}
    {!! Form::text('language', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>