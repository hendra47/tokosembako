<!-- Id Karyawan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_karyawan', 'Id Karyawan:') !!}
    {!! Form::text('id_karyawan', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Jabatan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_jabatan', 'Id Jabatan:') !!}
    {!! Form::text('id_jabatan', null, ['class' => 'form-control']) !!}
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
