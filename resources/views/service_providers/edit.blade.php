@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Service Provider
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($serviceProvider, ['route' => ['serviceProviders.update', $serviceProvider->id], 'method' => 'patch']) !!}

                        @include('service_providers.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection