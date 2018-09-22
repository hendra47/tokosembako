@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            jabatan
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id Jabatan:') !!}
    <p>{!! $data->id_jabatan !!}</p>
</div>

<!-- Jabatan Field -->
<div class="form-group">
    {!! Form::label('jabatan', 'Jabatan:') !!}
    <p>{!! $data->jabatan !!}</p>
</div>

<!-- Keterangan Field -->
<div class="form-group">
    {!! Form::label('keterangan', 'Keterangan:') !!}
    <p>{!! $data->keterangan !!}</p>
</div>

                    <a href="{!! route('jabatan.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
