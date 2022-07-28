<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item <?= $active = ($parentdir == 'home') ? 'active' : '' ?>">
            <a class="nav-link" href="<?= base_url('U'); ?>">
                <i class="icon-box menu-icon"></i>
                <span class="menu-title">Home</span>
            </a>
        </li>
        <li class="nav-item <?= $active = ($parentdir == 'admin') ? 'active' : '' ?>">
            <a class="nav-link" href="<?= base_url('U/Admin'); ?>">
                <i class="icon-head menu-icon"></i>
                <span class="menu-title">Admin</span>
            </a>
        </li>
    </ul>
</nav>