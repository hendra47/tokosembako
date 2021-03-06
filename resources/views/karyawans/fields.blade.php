<!-- Nama Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama', 'Nama:') !!}
    {!! Form::text('nama', null, ['class' => 'form-control']) !!}
</div>

<!-- Jk Field -->
<div class="form-group col-sm-6">
    <label>Jenis Kelamin</label>
    <select name="jk" class="form-control">
    	<option value=""></option>
    	<option value="L">L</option>
    	<option value="P">P</option>
    </select>
</div>

<!-- Alamat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('alamat', 'Alamat:') !!}
    {!! Form::text('alamat', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('karyawans.index') !!}" class="btn btn-default">Cancel</a>
</div>
