@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Perhitungan Gaji</h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>
        <div class="box box-primary">
            {!! Form::open(['action' => 'laporan2@cari','method'=>'POST']) !!}
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
                    {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
                </div>
                <?php
                    if(isset($absens) && count($absens)>0 ){
                ?>
                <div id='printarea' class="form-group col-sm-12">
                    <table class="table table-responsive" id="absens-table">
                        <thead>
                            <th>No</th>
                            <th>Karyawan</th>
                            <th>Jumlah Absen</th>
                            <th>Gaji Perhari</th>
                            <th>Total</th>
                        </thead>
                        <tbody>
                        <?php 
                            $no=1;
                            $total=0;
                         ?>
                        @foreach($absens as $absen)
                            <?php
                                $total=$absen->user_count*App\Helpers\spkHelper::gaji($absen->id_karyawan);
                            ?>
                            <tr>
                                <td>{!! $no !!}</td>
                                <td>{!! App\Helpers\spkHelper::karyawan($absen->id_karyawan) !!}</td>
                                <td>{!! $absen->user_count !!}</td>
                                <td>{!! App\Helpers\spkHelper::gaji($absen->id_karyawan) !!}</td>
                                <td>{!! $total !!}</td>
                            </tr>
                        <?php $no++ ?>
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
            </div>
            {!! Form::close() !!}

        </div>
    </div>
    
@endsection

