<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="profile-image">
                    <img class="img-xs rounded-circle" src="{{asset('../assets/images/faces/face8.jpg')}}" alt="profile image">
                    <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                    <p class="profile-name">Allen Moreno</p>
                    <p class="designation">Administrator</p>
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
                    <li class="nav-item"> <a class="nav-link" href="/user">Kelola Data User</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/member">Kelola Data Member</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/kategori">Kelola Data Kategori</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/penulis">Kelola Data Penulis</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/buku">Kelola Data Buku</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/peminjaman">Kelola Data peminjaman</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/icons/simple-line-icons.html">
                <span class="menu-title">Laporan Peminjaman</span>
                <i class="icon-book-open menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/forms/basic_elements.html">
                <span class="menu-title">Logo Out</span>
                <i class="icon-power menu-icon"></i>
            </a>
        </li>
    </ul>
</nav>