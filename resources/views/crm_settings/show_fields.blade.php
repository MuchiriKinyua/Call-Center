<!-- Crm Name Field -->
<div class="col-sm-12">
    {!! Form::label('crm_name', 'Crm Name:') !!}
    <p>{{ $crmSetting->crm_name }}</p>
</div>

<!-- Api Key Field -->
<div class="col-sm-12">
    {!! Form::label('api_key', 'Api Key:') !!}
    <p>{{ $crmSetting->api_key }}</p>
</div>

<!-- Api Secret Field -->
<div class="col-sm-12">
    {!! Form::label('api_secret', 'Api Secret:') !!}
    <p>{{ $crmSetting->api_secret }}</p>
</div>

<!-- Base Url Field -->
<div class="col-sm-12">
    {!! Form::label('base_url', 'Base Url:') !!}
    <p>{{ $crmSetting->base_url }}</p>
</div>

<!-- Auth Type Field -->
<div class="col-sm-12">
    {!! Form::label('auth_type', 'Auth Type:') !!}
    <p>{{ $crmSetting->auth_type }}</p>
</div>

<!-- Is Active Field -->
<div class="col-sm-12">
    {!! Form::label('is_active', 'Is Active:') !!}
    <p>{{ $crmSetting->is_active }}</p>
</div>

<!-- Created By Field -->
<div class="col-sm-12">
    {!! Form::label('created_by', 'Created By:') !!}
    <p>{{ $crmSetting->created_by }}</p>
</div>

