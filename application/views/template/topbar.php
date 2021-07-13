<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fal fa-bars"></i></a>
        </li>
    </ul>

    <!-- SEARCH FORM -->


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->

        <!-- User Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="fal fa-user">&nbsp;&nbsp;<?= $user['nama']; ?></i>
            </a>
            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">

                <div class="dropdown-divider"></div>
                <a href="<?= site_url('auth/logout') ?>" class="dropdown-item" data-toggle="modal" data-target="#ModalLO">
                    <i class="fal fa-fw fa-sign-out-alt mr-1"></i> Log Out
                </a>
            </div>
        </li>
    </ul>
</nav>
<!-- /.navbar -->