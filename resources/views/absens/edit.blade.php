@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Absen
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($absen, ['route' => ['absens.update', $absen->id], 'method' => 'patch']) !!}

                        @include('absens.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection