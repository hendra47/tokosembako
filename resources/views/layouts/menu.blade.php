
<li>
    <a href="{!! url('/home') !!}"><i class="fa fa-home"></i><span>Menu Utama</span></a>
</li>


<li class="treeview">
    <a href="#">
    <i class="fa fa-list"></i>
    <span>Master </span>
    <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
    </span>
    </a>
    <ul class="treeview-menu">
                <li class="{{ Request::is('users*') ? 'active' : '' }}">
                    <a href="{!! route('users.index') !!}"><i class="fa fa-circle-o"></i><span>Master Users</span></a>
                </li>
                <li class="{{ Request::is('absens*') ? 'active' : '' }}">
                    <a href="{!! route('absens.index') !!}"><i class="fa fa-circle-o"></i><span>Master Absen</span></a>
                </li>
                <li class="{{ Request::is('karyawans*') ? 'active' : '' }}">
                    <a href="{!! route('karyawans.index') !!}"><i class="fa fa-circle-o"></i><span>Master Karyawan</span></a>
                </li>
                <li class="{{ Request::is('jabatan*') ? 'active' : '' }}">
                    <a href="{!! route('jabatan.index') !!}"><i class="fa fa-circle-o"></i><span>Master Jabatan</span></a>
                </li>
                <li class="{{ Request::is('pembayaran*') ? 'active' : '' }}">
                    <a href="{!! route('pembayaran.index') !!}"><i class="fa fa-circle-o"></i><span>Master Pembayaran</span></a>
                </li>
                <li class="{{ Request::is('gajis*') ? 'active' : '' }}">
                    <a href="{!! route('gajis.index') !!}"><i class="fa fa-circle-o"></i><span>Master Gaji</span></a>
</li>


    </ul>
</li>




<li class="treeview">
    <a href="#">
    <i class="fa fa-book"></i>
    <span>Transaksi </span>
    <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
    </span>
    </a>
    <ul class="treeview-menu">
        
    </ul>
</li>

<li class="treeview">
    <a href="#">
    <i class="fa fa-bar-chart"></i>
    <span>Laporan </span>
    <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
    </span>
    </a>
    <ul class="treeview-menu">
            <a href="#"><i class="fa fa-circle-o"></i><span>Laporan</span></a>
    </ul>
</li>


<li>
    <a href="{!! url('/logout') !!}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i><span>Sign Out</span></a>
    <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
</li>










