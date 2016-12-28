<table class="table table-responsive" id="sms-table">
    <thead>
        
        <th>Body</th>
      
        <th>Date Received</th>
        <th>Date Sent</th>
        <th>Thread Id</th>
        
        <th>Address</th>
        <th>Type</th>
      
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($sms as $sms)
    <?php 
    $mil = $sms->date_received;
    if($mil == "0")
        $sms->date_received = null;
    else
    {
        $seconds = $mil / 1000;
        $sms->date_received = date("d/m/Y H:i:s", $seconds);
    }

    $mil = $sms->date_sent;
    if($mil == "0")
        $sms->date_sent = null;
    else
    {
        $seconds = $mil / 1000;
        $sms->date_sent = date("d/m/Y H:i:s", $seconds);
    }
     ?>
        <tr>
           
            <td>{!! $sms->body !!}</td>
            
            <td>{!! $sms->date_received !!}</td>
            <td>{!! $sms->date_sent !!}</td>
            <td>{!! $sms->thread_id !!}</td>
            
            <td>{!! $sms->address !!}</td>
            <td>{!! $sms->type !!}</td>
            
            <td>
                {!! Form::open(['route' => ['sms.destroy', $sms->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('sms.show', [$sms->thread_id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <!--a href="{!! route('sms.edit', [$sms->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    -->
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>