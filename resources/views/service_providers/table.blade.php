<table class="table table-responsive" id="serviceProviders-table">
    <thead>
        <th>Name</th>
        <th>Contract No</th>
        <th>Service</th>
        <th>Course</th>
        <th>Capacity</th>
        <th>Proprietor Name</th>
       
        <th>Phone</th>
        <th>Email</th>
        <th>County</th>
        

        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($serviceProviders as $serviceProvider)
        <tr>
            <td>{!! $serviceProvider->name !!}</td>
            <td>{!! $serviceProvider->contract_no !!}</td>
            <td>{!! $serviceProvider->service !!}</td>
            <td>{!! $serviceProvider->course !!}</td>
            <td>{!! $serviceProvider->capacity !!}</td>
            <td>{!! $serviceProvider->p_name !!}</td>
            
            <td>{!! $serviceProvider->phone !!}</td>
            <td>{!! $serviceProvider->email !!}</td>
            <td>{!! $serviceProvider->county !!}</td>
           

            <td>
                {!! Form::open(['route' => ['serviceProviders.destroy', $serviceProvider->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('serviceProviders.show', [$serviceProvider->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('serviceProviders.edit', [$serviceProvider->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>