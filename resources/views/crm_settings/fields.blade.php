<!-- Crm Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('crm_name', 'Crm Name:') !!}
    {!! Form::text('crm_name', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Api Key Field -->
<div class="form-group col-sm-6">
    {!! Form::label('api_key', 'Api Key:') !!}
    {!! Form::text('api_key', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Api Secret Field -->
<div class="form-group col-sm-6">
    {!! Form::label('api_secret', 'Api Secret:') !!}
    {!! Form::text('api_secret', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Base Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('base_url', 'Base Url:') !!}
    {!! Form::text('base_url', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Auth Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('auth_type', 'Auth Type:') !!}
    {!! Form::text('auth_type', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Is Active Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_active', 'Is Active:') !!}
    {!! Form::text('is_active', null, ['class' => 'form-control', 'maxlength' => 50, 'maxlength' => 50]) !!}
</div>

<!-- Created By Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created_by', 'Created By:') !!}
    {!! Form::text('created_by', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>