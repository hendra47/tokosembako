<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id Absen:') !!}
    <p>{!! $absen->id_absen !!}</p>
</div>

<!-- Id Karyawan Field -->
<div class="form-group">
    {!! Form::label('id_karyawan', 'Id Karyawan:') !!}
    <p>{!! $absen->id_karyawan !!}</p>
</div>

<!-- Tanggal Field -->
<div class="form-group">
    {!! Form::label('tanggal', 'Tanggal:') !!}
    <p>{!! $absen->tanggal !!}</p>
</div>

<!-- Shift Field -->
<div class="form-group">
    {!! Form::label('shift', 'Shift:') !!}
    <p>{!! $absen->shift !!}</p>
</div>

