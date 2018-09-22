<table class="table table-responsive" id="absens-table">
    <thead>
        <th>ID Absen</th>
        <th>Karyawan</th>
        <th>Tanggal</th>
        <th>Shift</th>
        <th>Status</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($absens as $absen)
        <tr>
            <td>{!! $absen->id_absen !!}</td>
            <td>{!! App\Helpers\spkHelper::karyawan($absen->id_karyawan) !!}</td>
            <td>{!! date_format($absen->tanggal,'d-m-Y') !!}</td>
            <td>{!! $absen->shift !!}</td>
            <td>{!! $absen->status !!}</td>
            <td>
                {!! Form::open(['route' => ['absens.destroy', $absen->id_absen], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('absens.show', [$absen->id_absen]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('absens.edit', [$absen->id_absen]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>