<div class="scrollbar-inner">
    <!-- Brand -->
    <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
            LECO
            <!-- Divider -->
            <hr class="my-4">
        </a>
    </div>
    <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Heading -->
            <h6 class="navbar-heading p-0 text-muted">
                <span class="docs-normal">Admin</span>
            </h6>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('admin') ?>">
                        <i class="ni ni-tv-2 text-primary"></i>
                        <span class="nav-link-text">Halaman Utama</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="<?= base_url('admin/kuliah') ?>">
                        <i class="fas fa-chalkboard-teacher text-primary"></i>
                        <span class="nav-link-text">Halaman Kuliah</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('admin/profile') ?>">
                        <i class="ni ni-single-02 text-yellow"></i>
                        <span class="nav-link-text">ProfileKu</span>
                    </a>
                </li>
            </ul>

            <!-- Divider -->
            <hr class="my-3">
            <!-- Heading -->
            <h6 class="navbar-heading p-0 text-muted">
                <span class="docs-normal">Pekerjaan</span>
            </h6>
            <!-- Navigation -->
            <ul class="navbar-nav mb-md-3">
                <!-- <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('awal/keuangan') ?>">
                        <i class="fas fa-money-check  text-blue "></i>
                        <span class="nav-link-text">KEUANGAN</span>
                    </a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('admin/job') ?>">
                        <i class="fas fa-user-md text-green"></i>
                        <span class="nav-link-text">Job Fair</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('admin/magang') ?>">
                        <i class="fas fa-people-carry text-green"></i>
                        <span class="nav-link-text">Lihat Magang</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
</nav>
<!-- Main content -->