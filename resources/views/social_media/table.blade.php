<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="social_media-table">
            <thead>
            <tr>
                <th>Ticket Id</th>
                <th>Interaction Id</th>
                <th>Platform</th>
                <th>Username</th>
                <th>Message</th>
                <th>Sentiment Label</th>
                <th>Interaction Type</th>
                <th>Timestamp</th>
                <th>Handled By</th>
                <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($socialMedia as $socialMedia)
                <tr>
                    <td>{{ $socialMedia->ticket_id }}</td>
                    <td>{{ $socialMedia->interaction_id }}</td>
                    <td>{{ $socialMedia->platform }}</td>
                    <td>{{ $socialMedia->username }}</td>
                    <td>{{ $socialMedia->message }}</td>
                    <td>{{ $socialMedia->sentiment_label }}</td>
                    <td>{{ $socialMedia->interaction_type }}</td>
                    <td>{{ $socialMedia->timestamp }}</td>
                    <td>{{ $socialMedia->handled_by }}</td>
                    <td>{{ $socialMedia->status }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['socialMedia.destroy', $socialMedia->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('socialMedia.show', [$socialMedia->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('socialMedia.edit', [$socialMedia->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $socialMedia])
        </div>
    </div>
</div>
