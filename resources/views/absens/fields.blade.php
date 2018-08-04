<!-- Id Karyawan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_karyawan', 'Id Karyawan:') !!}
    {!! Form::text('id_karyawan', null, ['class' => 'form-control']) !!}
</div>

<!-- Tanggal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tanggal', 'Tanggal:') !!}
    {!! Form::date('tanggal', null, ['class' => 'form-control']) !!}
</div>

<!-- Shift Field -->
<div class="form-group col-sm-6">
    {!! Form::label('shift', 'Shift:') !!}
    {!! Form::text('shift', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('absens.index') !!}" class="btn btn-default">Cancel</a>
</div>
