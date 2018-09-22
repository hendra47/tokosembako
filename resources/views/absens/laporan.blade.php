@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Laporan Absen</h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>
        <div class="box box-primary">
            {!! Form::open(['action' => 'laporan1@cari','method'=>'POST']) !!}
            <div class="box-body">
                <div class="form-group col-sm-12">
                        @include('flash::message')
                </div>
                <div class="form-group col-sm-3">
                    {!! Form::label('tanggal', 'Dari :') !!}
                    {!! Form::date('tanggal', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-sm-3">
                    {!! Form::label('tanggal2', 'Sampai :') !!}
                    {!! Form::date('tanggal2', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-sm-2">
                    {!! Form::label('shift', 'Shift:') !!}
                    <select class="form-control" name="shift">
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                </div>
                <div class="form-group col-sm-4" style="margin-top:24px;">
                    {!! Form::submit('Submit', ['class' => 'btn btn-primary pull-locale_filter_matches']) !!}
                </div>                
                <?php
                    if(isset($absens) && count($absens)>0 ){
                ?>
                <div id='printarea' class="form-group col-sm-12">
                    <div class="col-sm-12" style="text-align: center;">
                        <h2>Toko Aan</h2>
                        <p>Jl.Lippo Karawaci</p>
                    </div>
                    <table class="table table-responsive" id="absens-table">
                        <thead>
                            <th>ID</th>
                            <th>Karyawan</th>
                            <th>Tanggal</th>
                            <th>Shift</th>
                            <th>Status</th>
                        </thead>
                        <tbody>
                        @foreach($absens as $absen)
                            <tr>
                                <td>{!! $absen->id_absen !!}</td>
                                <td>{!! App\Helpers\spkHelper::karyawan($absen->id_karyawan) !!}</td>
                                <td>{!! $absen->tanggal !!}</td>
                                <td>{!! $absen->shift !!}</td>
                                <td>{!! $absen->status !!}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="form-group col-sm-12">
                    <a   id='print' class="btn btn-warning pull-right" href="">
                    <i class="fa fa-print"></i> <span> Print</span>
                    </a>                
                </div>
                <?php
                }
                ?>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

