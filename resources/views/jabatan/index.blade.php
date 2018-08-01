@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">jabatan</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('jabatan.create') !!}">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <table class="table table-responsive" id="karyawans-table">
    <thead>
        <th>Jabatan</th>
        <th>Keterangan</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($data as $karyawan)
        <tr>
            <td>{!! $karyawan->jabatan !!}</td>
            <td>{!! $karyawan->keterangan !!}</td>
            <td>
                {!! Form::open(['route' => ['jabatan.destroy', $karyawan->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('jabatan.show', [$karyawan->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('jabatan.edit', [$karyawan->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
            </div>
        </div>
    </div>
@endsection

