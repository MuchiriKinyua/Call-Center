<!-- Interaction Id Field -->
<div class="col-sm-12">
    {!! Form::label('interaction_id', 'Interaction Id:') !!}
    <p>{{ $sentimentAnalysis->interaction_id }}</p>
</div>

<!-- Channel Field -->
<div class="col-sm-12">
    {!! Form::label('channel', 'Channel:') !!}
    <p>{{ $sentimentAnalysis->channel }}</p>
</div>

<!-- Content Field -->
<div class="col-sm-12">
    {!! Form::label('content', 'Content:') !!}
    <p>{{ $sentimentAnalysis->content }}</p>
</div>

<!-- Sentiment Score Field -->
<div class="col-sm-12">
    {!! Form::label('sentiment_score', 'Sentiment Score:') !!}
    <p>{{ $sentimentAnalysis->sentiment_score }}</p>
</div>

<!-- Analyzed At Field -->
<div class="col-sm-12">
    {!! Form::label('analyzed_at', 'Analyzed At:') !!}
    <p>{{ $sentimentAnalysis->analyzed_at }}</p>
</div>

<!-- Language Field -->
<div class="col-sm-12">
    {!! Form::label('language', 'Language:') !!}
    <p>{{ $sentimentAnalysis->language }}</p>
</div>

