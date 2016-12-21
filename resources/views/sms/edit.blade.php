@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Sms
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($sms, ['route' => ['sms.update', $sms->id], 'method' => 'patch']) !!}

                        @include('sms.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection