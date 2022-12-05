<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <ul class="navbar-nav ml-auto">
        <div class="topbar-divider d-none d-sm-block"></div>

        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user mr-2"></i>
                <span class="mr-2 d-none d-lg-inline text-gray-700"><?= $user; ?></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-500"></i>
                    Activity Log
                </a>
                <a class="dropdown-item" target="blank" href="http://localhost/opus_dev/">
                    <i class="fas fa-globe fa-sm fa-fw mr-2 text-gray-500"></i>
                    Opus Website
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-500"></i>
                    Logout
                </a>
            </div>
        </li>

    </ul>

</nav>