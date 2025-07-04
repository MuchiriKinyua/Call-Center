<!-- Ticket Id Field -->
<div class="col-sm-12">
    {!! Form::label('ticket_id', 'Ticket Id:') !!}
    <p>{{ $customerFeedback->ticket_id }}</p>
</div>

<!-- Customer Id Field -->
<div class="col-sm-12">
    {!! Form::label('customer_id', 'Customer Id:') !!}
    <p>{{ $customerFeedback->customer_id }}</p>
</div>

<!-- Rating Field -->
<div class="col-sm-12">
    {!! Form::label('rating', 'Rating:') !!}
    <p>{{ $customerFeedback->rating }}</p>
</div>

<!-- Comments Field -->
<div class="col-sm-12">
    {!! Form::label('comments', 'Comments:') !!}
    <p>{{ $customerFeedback->comments }}</p>
</div>

<!-- Submitted At Field -->
<div class="col-sm-12">
    {!! Form::label('submitted_at', 'Submitted At:') !!}
    <p>{{ $customerFeedback->submitted_at }}</p>
</div>

