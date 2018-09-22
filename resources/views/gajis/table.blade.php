<table class="table table-responsive" id="gajis-table">
    <thead>
        <th>ID Gaji</th>
        <th>Karyawan</th>
        <th>Jabatan</th>
        <th>Gaji</th>
        <th>Keterangan</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($gajis as $gaji)
        <tr>
            <td>{!! $gaji->id_gaji !!}</td>
            <td>{!! App\Helpers\spkHelper::karyawan($gaji->id_karyawan) !!}</td>
            <td>{!! App\Helpers\spkHelper::jabatan($gaji->id_jabatan) !!}</td>
            <td>{!! $gaji->gaji !!}</td>
            <td>{!! $gaji->keterangan !!}</td>
            <td>
                {!! Form::open(['route' => ['gajis.destroy', $gaji->id_gaji], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('gajis.show', [$gaji->id_gaji]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('gajis.edit', [$gaji->id_gaji]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>