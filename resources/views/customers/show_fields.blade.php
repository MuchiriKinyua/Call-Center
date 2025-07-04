<!-- Full Name Field -->
<div class="col-sm-12">
    {!! Form::label('full_name', 'Full Name:') !!}
    <p>{{ $customer->full_name }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $customer->email }}</p>
</div>

<!-- Phone Field -->
<div class="col-sm-12">
    {!! Form::label('phone', 'Phone:') !!}
    <p>{{ $customer->phone }}</p>
</div>

<!-- Alternative Phone Field -->
<div class="col-sm-12">
    {!! Form::label('alternative_phone', 'Alternative Phone:') !!}
    <p>{{ $customer->alternative_phone }}</p>
</div>

<!-- Address Field -->
<div class="col-sm-12">
    {!! Form::label('address', 'Address:') !!}
    <p>{{ $customer->address }}</p>
</div>

<!-- Location Field -->
<div class="col-sm-12">
    {!! Form::label('location', 'Location:') !!}
    <p>{{ $customer->location }}</p>
</div>

<!-- Account Number Field -->
<div class="col-sm-12">
    {!! Form::label('account_number', 'Account Number:') !!}
    <p>{{ $customer->account_number }}</p>
</div>

<!-- Customer Type Field -->
<div class="col-sm-12">
    {!! Form::label('customer_type', 'Customer Type:') !!}
    <p>{{ $customer->customer_type }}</p>
</div>

<!-- Created By Field -->
<div class="col-sm-12">
    {!! Form::label('created_by', 'Created By:') !!}
    <p>{{ $customer->created_by }}</p>
</div>

