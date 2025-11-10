<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3><?php echo $title; ?></h3>
    </section>

    <!-- Main content -->
    <section class="container-fluid">
        <!-- Default box -->
        <div class="row">
            <div class="col-md-12">

                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('assets/img/profile/' . $user['image']); ?>" alt="User profile picture">
                        <h3 class="profile-username text-center"><?php echo $user['nama']; ?></h3>
                        <a href="<?php echo base_url('user/edit_profile'); ?>" class="btn btn-primary btn-block"><b>Edit Profile</b></a>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

                <!-- About Me Box -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Date Created</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <strong><i class="fa fa-book margin-r-5"></i> <?php echo $user['date_created']; ?></strong>
                        <hr>
                        <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>
                        <p class="text-muted">Indonesia</p>
                        <hr>
                        <strong><i class="fa fa-file-text-o margin-r-5"></i> My Username</strong>
                        <p></i> <?php echo $user['username']; ?></p>
                        <hr>
                        <strong><i class="ion-social-dropbox-outline margin-r-5"></i> Change Password</strong>
                        <p></i><a href="<?php echo base_url('user/edit_profile'); ?>" class="btn btn-outline-primary font-weight-bolder">Ubah Password</a></p>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>

                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->