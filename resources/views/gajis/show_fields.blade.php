<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id Gaji:') !!}
    <p>{!! $gaji->id_gaji !!}</p>
</div>

<!-- Id Karyawan Field -->
<div class="form-group">
    {!! Form::label('id_karyawan', 'Id Karyawan:') !!}
    <p>{!! $gaji->id_karyawan !!}</p>
</div>

<!-- Id Jabatan Field -->
<div class="form-group">
    {!! Form::label('id_jabatan', 'Id Jabatan:') !!}
    <p>{!! $gaji->id_jabatan !!}</p>
</div>

<!-- Gaji Field -->
<div class="form-group">
    {!! Form::label('gaji', 'Gaji:') !!}
    <p>{!! $gaji->gaji !!}</p>
</div>

<!-- Keterangan Field -->
<div class="form-group">
    {!! Form::label('keterangan', 'Keterangan:') !!}
    <p>{!! $gaji->keterangan !!}</p>
</div>

