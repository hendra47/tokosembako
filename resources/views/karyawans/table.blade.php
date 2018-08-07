<table class="table table-responsive" id="karyawans-table">
    <thead>
        <th>ID</th>
        <th>Nama</th>
        <th>Jk</th>
        <th>Alamat</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($karyawans as $karyawan)
        <tr>
            <td>{!! $karyawan->id !!}</td>
            <td>{!! $karyawan->nama !!}</td>
            <td>{!! $karyawan->jk !!}</td>
            <td>{!! $karyawan->alamat !!}</td>
            <td>
                {!! Form::open(['route' => ['karyawans.destroy', $karyawan->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('karyawans.show', [$karyawan->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('karyawans.edit', [$karyawan->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>