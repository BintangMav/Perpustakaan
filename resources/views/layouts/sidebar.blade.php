<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="profile-image">
                    <img class="img-xs rounded-circle" src="{{asset('../assets/images/faces/face8.jpg')}}" alt="profile image">
                </div>
                <div class="text-wrapper">
                    <p class="profile-name">{{Auth()->User()->name}}</p>
                    <p class="designation">{{Auth()->User()->level}}</p>
                </div>
                <div class="icon-container">
                    <i class="icon-bubbles"></i>
                    <div class="dot-indicator bg-danger"></div>
                </div>
            </a>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Dashboard</span>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/dashboard">
                <span class="menu-title">Dashboard</span>
                <i class="icon-screen-desktop menu-icon"></i>
            </a>
        </li>
        <li class="nav-item nav-category"><span class="nav-link">Menu</span></li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Kelola Data</span>
                <i class="icon-layers menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu"> 
                    @if(Auth()->User()->level=='admin')
                    <li class="nav-item"> <a class="nav-link" href="/user">Kelola Data User</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/member">Kelola Data Member</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/kategori">Kelola Data Kategori</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/penulis">Kelola Data Penulis</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/buku">Kelola Data Buku</a></li>
                    @endif
                    @if(Auth()->User()->level=='admin'||Auth()->User()->level=='petugas')
                    <li class="nav-item"> <a class="nav-link" href="/peminjaman">Kelola Data Peminjaman</a></li>
                    @endif
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/peminjaman/laporan">
                <span class="menu-title">Laporan Peminjaman</span>
                <i class="icon-book-open menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/login">
                <span class="menu-title">Logo Out</span>
                <i class="icon-power menu-icon"></i>
            </a>
        </li>
    </ul>
</nav>