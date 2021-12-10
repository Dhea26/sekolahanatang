<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SEKOLAH ANTANG</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- QUERY MENU -->
    <?php
    $role_id = $this->session->userdata('role_id');
    $queryMenu = "SELECT `user_menu`.`id`, `menu` 
                    FROM `user_menu` JOIN `user_access_menu`
                    ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                WHERE `user_access_menu`.`role_id` = $role_id
                ORDER BY `user_access_menu`.`menu_id` ASC
            ";
    $menu  = $this->db->query($queryMenu)->result_array();

    ?>
    <!-- LOOPING MENU -->
    <?php foreach ($menu as $m) : ?>

        <div class="sidebar-heading">
            <?= $m['menu']; ?>
        </div>
        <!-- SIAP SUB MENU SESUAI MENU -->
        <?php
        $menuId = $m['id'];
        $querySubMenu = "SELECT *
                            FROM `user_sub_menu` JOIN `user_menu`
                            ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                            WHERE `user_sub_menu`.`menu_id` = $menuId
                            AND `user_sub_menu`.`is_active` = 1
                            ";

        $subMenu  = $this->db->query($querySubMenu)->result_array();
        ?>

        <?php foreach ($subMenu as $sm) : ?>
            <?php if ($title == $sm['title']) : ?>
                <li class="nav-item active">
                <?php else : ?>
                <li class="nav-item ">
                <?php endif; ?>
                <li class="nav-item">
                    <a class="nav-link pb-0" href="<?= base_url($sm['url']); ?>">
                        <i class="<?= $sm['icon']; ?>"></i>
                        <span><?= $sm['title']; ?></span></a>
                </li>
            <?php endforeach; ?>

        <?php endforeach; ?>

        <!-- Heading -->
        <!-- <div class=" sidebar-heading">
                            User
                            </div> -->

        <!-- Nav Item - Profil -->
        <!-- <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-user"></i>
            <span>Profil</span></a>
    </li> -->

        <!-- Nav Item - Pages Collapse Menu -->
        <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item" href="buttons.html">Buttons</a>
                <a class="collapse-item" href="cards.html">Cards</a>
            </div>
        </div>
    </li> -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas  fa-fw fa-swatchbook"></i>
                <span>Pembelajaran</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Pembelajaran:</h6>
                    <a class="collapse-item" href="buttons.html">Kelas Rumah Tahfidz</a>
                    <a class="collapse-item" href="buttons.html">Kelas PAUD</a>
                    <a class="collapse-item" href="buttons.html">Kelas Penitipan Anal</a>
                    <a class="collapse-item" href="buttons.html">Kelas Japan For Kids</a>
                    <a class="collapse-item" href="buttons.html">Kelas English For Kids</a>
                    <a class="collapse-item" href="buttons.html">Kelas Private Tugas</a>

                </div>
            </div>
        </li>
        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fab fa-fw fa-buromobelexperte"></i>
                <span>Kelas</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Kelas:</h6>
                    <a class="collapse-item" href="kelas">Rumah Tahfidz</a>

                </div>
            </div>
        </li>

        <!-- Divider -->
        <!-- <hr class="sidebar-divider"> -->

        <!-- Heading -->
        <!-- <div class="sidebar-heading">
        Addons
    </div> -->

        <!-- Nav Item - Pages Collapse Menu -->
        <!-- <li class="nav-item active">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="login.html">Login</a>
                <a class="collapse-item" href="register.html">Register</a>
                <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item" href="404.html">404 Page</a>
                <a class="collapse-item active" href="blank.html">Blank Page</a>
            </div>
        </div>
    </li> -->



        <!-- Nav Item - Logout -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('auth/logout/'); ?>">
                <i class="fas  fa-fw fa-sign-out-alt"></i>
                <span>Logout</span></a>
        </li>
        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

</ul>
<!-- End of Sidebar -->