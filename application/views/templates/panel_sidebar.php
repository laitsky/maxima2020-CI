<!-- Sidebar -->
<ul class="mxm-sidenav">

    <!-- Sidebar - Brand -->
    <div class="mxm-sidenav-close">
        <button class="mxm-close"><i class="lar la-times-circle" id="iconcls"></i></button>
    </div>
    <a href="<?php echo base_url()?>" class="mxm-sidenav-header">
        <img class="mxm-sidenav-img" src="<?= base_url('assets/icons/mxm20-icon-144x144.png'); ?>" alt="Logo MAXIMA 2020">MAXIMA 2020
    </a>

    <hr class="mxm-sidenav-divider">

    <!--QUERY MENU-->
    <?php
    $role_id = $this->session->userdata('role_id');

    $query_menu = "SELECT `user_menu`.`id`, `menu`
                    FROM `user_menu` JOIN `user_access_menu`
                    ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                    WHERE `user_access_menu`.`role_id` = $role_id
                    ORDER BY `user_access_menu`.`menu_id` ASC";

    $menu = $this->db->query($query_menu)->result_array();
    ?>

    <?php foreach ($menu as $m) : ?>
        <div class="mxm-sidenav-subheader">
            <?= $m['menu']; ?>
        </div>


        <?php
        $menuId = $m['id'];
        $querySubMenu = "SELECT *
                         FROM `user_sub_menu` JOIN `user_menu` 
                        ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                        WHERE `user_sub_menu`.`menu_id` = $menuId
                        AND `user_sub_menu`.`is_active` = 1
                                ";
        $subMenu = $this->db->query($querySubMenu)->result_array();
        ?>

        <?php foreach ($subMenu as $sm) : ?>

                <li class="mxm-sidenav-item">
                <a href="<?= base_url($sm['url']); ?>">
                    <i class="<?= $sm['icon']; ?>"></i>
                    <span><?= $sm['title']; ?></span></a>
                </li>
            <?php endforeach; ?>

            <hr class="mxm-sidenav-divider">
        <?php endforeach; ?>
</ul>
<!-- End of Sidebar -->