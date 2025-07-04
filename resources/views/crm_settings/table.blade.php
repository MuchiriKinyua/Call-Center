<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="crm_settings-table">
            <thead>
            <tr>
                <th>Crm Name</th>
                <th>Api Key</th>
                <th>Api Secret</th>
                <th>Base Url</th>
                <th>Auth Type</th>
                <th>Is Active</th>
                <th>Created By</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($crmSettings as $crmSetting)
                <tr>
                    <td>{{ $crmSetting->crm_name }}</td>
                    <td>{{ $crmSetting->api_key }}</td>
                    <td>{{ $crmSetting->api_secret }}</td>
                    <td>{{ $crmSetting->base_url }}</td>
                    <td>{{ $crmSetting->auth_type }}</td>
                    <td>{{ $crmSetting->is_active }}</td>
                    <td>{{ $crmSetting->created_by }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['crmSettings.destroy', $crmSetting->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('crmSettings.show', [$crmSetting->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('crmSettings.edit', [$crmSetting->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $crmSettings])
        </div>
    </div>
</div>
