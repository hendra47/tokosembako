<?php //dd(Request::segment(3)); ?>
<div class="form-group col-sm-6">
    {!! Form::label('id_karyawan', 'Nama Karyawan:') !!}
<select class="form-control" name="id_karyawan">
    @if(Request::segment(3)=="edit")
        <option value="{{$gaji->id_karyawan}}">{!! App\Helpers\spkHelper::karyawan($gaji->id_karyawan) !!}</option>
    @else
        <option value=""></option>
    @endif
     @foreach($karyawan as $item)
     <option value="{{ $item->id_karyawan }}">{{ $item->nama }}</option>
     @endforeach
</select>
</div>

<!-- Id Jabatan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_jabatan', 'Jabatan:') !!}
<select class="form-control" name="id_jabatan">
    @if(Request::segment(3)=="edit")
        <option value="{{$gaji->id_jabatan}}">{!! App\Helpers\spkHelper::jabatan($gaji->id_jabatan) !!}</option>
    @else
        <option value=""></option>
    @endif
     @foreach($jabatan as $item)
     <option value="{{ $item->id_jabatan }}">{{ $item->jabatan }}</option>
     @endforeach
</select>
</div>


<!-- Gaji Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gaji', 'Gaji:') !!}
    {!! Form::text('gaji', null, ['class' => 'form-control']) !!}
</div>

<!-- Keterangan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('keterangan', 'Keterangan:') !!}
    {!! Form::text('keterangan', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('gajis.index') !!}" class="btn btn-default">Cancel</a>
</div>

