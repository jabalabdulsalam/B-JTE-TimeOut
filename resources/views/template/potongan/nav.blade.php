<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <div class="user-details">
        <div class="pull-left">
            <img src="{{asset("/images/users/avatar-1.jpg")}}" alt="" class="thumb-md rounded-circle">
        </div>
        <div class="user-info">
            <a href="/profile">Stanley Jones</a>
            <p class="text-muted m-0">Administrator</p>
        </div>
    </div>

    <!--- Sidemenu -->
    <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu" id="side-menu">
            <li class="menu-title">M E N U</li>
            <li>
                <a href="{{ route('beranda') }}">
                    <i class="ti-home"></i><span> Beranda </span>
                </a>
            </li>

            <li>
                <a href="/daftar-pegawai"><i class="fas fa-users"></i>

                    <span> Daftar Pegawai </span></span></a>
            </li>

            <li>
                <a href="/jadwal-kerja">
                    <i class="fas fa-list"></i> <span> Jadwal Kerja </span>
                </a>
            </li>


        </ul>

    </div>
    <!-- Sidebar -->
    <div class="clearfix"></div>

</div>