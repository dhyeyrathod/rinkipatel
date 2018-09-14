<aside class="app-sidebar">
    <div class="app-sidebar__user">
        <img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
            <p class="app-sidebar__user-name">John Doe</p>
            <p class="app-sidebar__user-designation">Frontend Developer</p>
        </div>
    </div>
    <ul class="app-menu">
        <li><a class="app-menu__item active" href="<?= base_url() ?>"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li class="treeview">
            <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-heart"></i><span class="app-menu__label">Profile</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="<?= base_url('profile/add_new') ?>"><i class="icon fa fa-circle-o"></i> Add New Profile </a></li>
            </ul>
        </li>
        <li class="treeview">
            <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-map-marker"></i><span class="app-menu__label">Location</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="<?= base_url('location/cities') ?>"><i class="icon fa fa-circle-o"></i> Cities </a></li>
                <li><a class="treeview-item" href="<?= base_url('location/area') ?>"><i class="icon fa fa-circle-o"></i> Area </a></li>
            </ul>
        </li>
        <li><a class="app-menu__item" href="<?= base_url('services') ?>"><i class="app-menu__icon fa fa-tasks"></i><span class="app-menu__label">Services</span></a></li>
        <li><a class="app-menu__item" href="<?= base_url('category') ?>"><i class="app-menu__icon fa fa-tasks"></i><span class="app-menu__label">Category</span></a></li>
        <li class="treeview">
            <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-map-marker"></i><span class="app-menu__label">Blog</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="<?= base_url('blog/add_new_blog') ?>"><i class="icon fa fa-circle-o"></i> Add New Blog </a></li>
                <li><a class="treeview-item" href="<?= base_url('blog/blog_list') ?>"><i class="icon fa fa-circle-o"></i> Blog Listing </a></li>
            </ul>
        </li>
    </ul>
</aside>
