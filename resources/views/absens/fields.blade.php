
<div class="form-group col-sm-6">
    {!! Form::label('id_karyawan', 'Karyawan:') !!}
<select class="form-control" name="id_karyawan">
    @if(Request::segment(3)=="edit")
        <option value="{{$absen->id_karyawan}}">{!! App\Helpers\spkHelper::karyawan($absen->id_karyawan) !!}</option>
    @else
        <option value=""></option>
    @endif
     @foreach($karyawan as $item)
     <option value="{{ $item->id }}">{{ $item->nama }}</option>
     @endforeach
</select>
</div>

<!-- Tanggal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tanggal', 'Tanggal:') !!}
    {!! Form::date('tanggal', null, ['class' => 'form-control']) !!}
</div>

<!-- Shift Field -->
<div class="form-group col-sm-6">
    {!! Form::label('shift', 'Shift:') !!}
<select class="form-control" name="shift">
    @if(Request::segment(3)=="edit")
        <option value="{{$absen->shift}}">{!! $absen->shift !!}</option>
    @endif
     <option value="1">1</option>
     <option value="2">2</option>
</select>
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
<select class="form-control" name="status">
    @if(Request::segment(3)=="edit")
        <option value="{{$absen->status}}">{!! $absen->status !!}</option>
    @endif
     <option value="Hadir">Hadir</option>
     <option value="Alpa">Alpa</option>
     <option value="Izin">Izin</option>
</select>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('absens.index') !!}" class="btn btn-default">Cancel</a>
</div>
