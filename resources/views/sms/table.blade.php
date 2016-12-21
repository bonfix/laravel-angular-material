<table class="table table-responsive" id="sms-table">
    <thead>
        <th> Id</th>
        <th>Body</th>
        <th>Person</th>
        <th>Read</th>
        <th>Seen</th>
        <th>Date Received</th>
        <th>Date Sent</th>
        <th>Thread Id</th>
        <th>Status</th>
        <th>Address</th>
        <th>Type</th>
        <th>Created By</th>
        <th>Updated By</th>
        <th>Deleted By</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($sms as $sms)
        <tr>
            <td>{!! $sms->_id !!}</td>
            <td>{!! $sms->body !!}</td>
            <td>{!! $sms->person !!}</td>
            <td>{!! $sms->read !!}</td>
            <td>{!! $sms->seen !!}</td>
            <td>{!! $sms->date_received !!}</td>
            <td>{!! $sms->date_sent !!}</td>
            <td>{!! $sms->thread_id !!}</td>
            <td>{!! $sms->status !!}</td>
            <td>{!! $sms->address !!}</td>
            <td>{!! $sms->type !!}</td>
            <td>{!! $sms->created_by !!}</td>
            <td>{!! $sms->updated_by !!}</td>
            <td>{!! $sms->deleted_by !!}</td>
            <td>
                {!! Form::open(['route' => ['sms.destroy', $sms->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('sms.show', [$sms->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('sms.edit', [$sms->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>