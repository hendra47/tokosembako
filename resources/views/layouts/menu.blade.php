
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







