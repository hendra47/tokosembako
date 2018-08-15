@if(Auth::user()->group=="admin")
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
                
                <li class="{{ Request::is('karyawans*') ? 'active' : '' }}">
                    <a href="{!! route('karyawans.index') !!}"><i class="fa fa-circle-o"></i><span>Master Karyawan</span></a>
                </li>
                <li class="{{ Request::is('jabatan*') ? 'active' : '' }}">
                    <a href="{!! route('jabatan.index') !!}"><i class="fa fa-circle-o"></i><span>Master Jabatan</span></a>
                </li>
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
        <li class="{{ Request::is('gajis*') ? 'active' : '' }}">
                    <a href="{!! route('gajis.index') !!}"><i class="fa fa-circle-o"></i><span>Gaji</span></a>
        </li>
        <li class="{{ Request::is('absens*') ? 'active' : '' }}">
                    <a href="{!! route('absens.index') !!}"><i class="fa fa-circle-o"></i><span> Absen</span></a>
        </li>
        
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
        <li class="{{ Request::is('absens*') ? 'active' : '' }}">
                <a href="{!! url('/laporan1') !!}"><i class="fa fa-circle-o"></i><span>Absensi</span></a>
        </li>
        <li class="{{ Request::is('pembayaran*') ? 'active' : '' }}">
                    <a href="{!! route('pembayaran.create') !!}"><i class="fa fa-circle-o"></i><span> Perhitungan Gaji</span></a>
        </li>
    </ul>
</li>

<li>
    <a href="{!! url('/logout') !!}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i><span>Sign Out</span></a>
    <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
    </form>
</li>

@endif

@if(Auth::user()->group=="manager")
<li>
    <a href="{!! url('/home') !!}"><i class="fa fa-home"></i><span>Menu Utama</span></a>
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
        <li class="{{ Request::is('absens*') ? 'active' : '' }}">
                <a href="{!! url('/laporan1') !!}"><i class="fa fa-circle-o"></i><span>Absensi</span></a>
        </li>
        <li class="{{ Request::is('pembayaran*') ? 'active' : '' }}">
                    <a href="{!! route('pembayaran.create') !!}"><i class="fa fa-circle-o"></i><span> Perhitungan Gaji</span></a>
        </li>
    </ul>
</li>

<li>
    <a href="{!! url('/logout') !!}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i><span>Sign Out</span></a>
    <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
    </form>
</li>

@endif


@if(Auth::user()->group=="payroll")
<li>
    <a href="{!! url('/home') !!}"><i class="fa fa-home"></i><span>Menu Utama</span></a>
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
        <li class="{{ Request::is('gajis*') ? 'active' : '' }}">
                    <a href="{!! route('gajis.index') !!}"><i class="fa fa-circle-o"></i><span>Gaji</span></a>
        </li>
        <li class="{{ Request::is('absens*') ? 'active' : '' }}">
                    <a href="{!! route('absens.index') !!}"><i class="fa fa-circle-o"></i><span> Absen</span></a>
        </li>
        
    </ul>
</li>



<li>
    <a href="{!! url('/logout') !!}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i><span>Sign Out</span></a>
    <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
    </form>
</li>

@endif