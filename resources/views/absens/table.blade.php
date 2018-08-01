<table class="table table-responsive" id="absens-table">
    <thead>
        <th>Id Karyawan</th>
        <th>Tanggal</th>
        <th>Shift</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($absens as $absen)
        <tr>
            <td>{!! $absen->id_karyawan !!}</td>
            <td>{!! $absen->tanggal !!}</td>
            <td>{!! $absen->shift !!}</td>
            <td>
                {!! Form::open(['route' => ['absens.destroy', $absen->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('absens.show', [$absen->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('absens.edit', [$absen->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>