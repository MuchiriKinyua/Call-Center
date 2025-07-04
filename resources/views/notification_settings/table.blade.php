<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="notification_settings-table">
            <thead>
            <tr>
                <th>User Id</th>
                <th>Channel</th>
                <th>Type</th>
                <th>Is Enabled</th>
                <th>Preferred Time</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($notificationSettings as $notificationSetting)
                <tr>
                    <td>{{ $notificationSetting->user_id }}</td>
                    <td>{{ $notificationSetting->channel }}</td>
                    <td>{{ $notificationSetting->type }}</td>
                    <td>{{ $notificationSetting->is_enabled }}</td>
                    <td>{{ $notificationSetting->preferred_time }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['notificationSettings.destroy', $notificationSetting->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('notificationSettings.show', [$notificationSetting->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('notificationSettings.edit', [$notificationSetting->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $notificationSettings])
        </div>
    </div>
</div>
