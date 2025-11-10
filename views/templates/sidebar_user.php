<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url('assets/img/profile/') . $user['image']; ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $user['nama']; ?></p>
                <a href="#"><i class="fa fa-circle text-warnings"></i> Online</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">USER NAVIGASI</li>
            <li>
                <a href="<?php echo base_url('user/index'); ?>">
                    <i class="fa fa-home"></i> <span>Dashboard</span>
                    <span class="pull-right-container">
                    </span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('user/profile'); ?>">
                    <i class="fa fa-user"></i> <span>Profile</span>
                    <span class="pull-right-container">
                    </span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>File Upload</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('user/lap_harian'); ?>"><i class="fa fa-circle-o"></i> Surat Masuk</a></li>
                    <li><a href="<?php echo base_url('user/lap_bulanan'); ?>"><i class="fa fa-circle-o"></i> Surat Keluar</a></li>
                    <li><a href="<?php echo base_url('user/lap_tahunan'); ?>"><i class="fa fa-circle-o"></i> Surat Rekomendasi</a></li>
                    <li><a href="<?php echo base_url('user/lap_lain'); ?>"><i class="fa fa-circle-o"></i> Madrasah Diniyah</a></li>
                    <li><a href="<?php echo base_url('user/dok_kerja'); ?>"><i class="fa fa-circle-o"></i> Ijin Operasional</a></li>
                </ul>
            </li>
            <li class="header">END</li>
            <li><a href="<?= base_url('auth/logout'); ?>" class="tombol-logout"><i class="fa fa-sign-out text-aqua"></i> <span>Logout</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- =============================================== -->