<!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo site_url('dashboard') ?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('dashboard') ?>">
                    <i class="fas fa-fw fa-clipboard-list   "></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('tanaman') ?>">
                    <i class="fas fa-fw fa-clipboard-list   "></i>
                    <span>Jual</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('kelola') ?>">
                    <i class="fas fa-fw fa-clipboard-list   "></i>
                    <span>Pengelolaan</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('history') ?>">
                    <i class="fas fa-fw fa-clipboard-list   "></i>
                    <span>History</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>