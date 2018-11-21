<!DOCTYPE html>
<html>
<head>
    <title>Learning Space</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
</head>
<body>
    <!--register-->
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4 col-md-offset-3">
            <center><h2>REGISTRASI</h2></center>
                <hr>
                <form class="form-horizontal" method="POST" action="<?php echo site_url("auth/proses_register"); ?>">
                    <div class="from-group">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap" value="<?php echo set_value("nama_lengkap"); ?>">
                        <?php echo form_error('nama_lengkap'); ?>
                    </div>
                    <div class="from-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo set_value("email"); ?>">
                        <?php echo form_error('email'); ?>
                    </div>
                    <div class="from-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo set_value("username"); ?>">
                        <?php echo form_error('username'); ?>
                    </div>
                    <div class="from-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo set_value("password"); ?>">
                        <?php echo form_error('password'); ?>
                    </div>
                    <div class="from-group">
                        <label>Konfirmasi Password</label>
                        <input type="password" class="form-control" name="konfirmasi_password" placeholder="Konfirmasi Password">
                        <?php echo form_error('konfirmasi_password'); ?>
                    </div>
                    <hr>
                    <div class="from-group">
                        <button type="submit" class="btn btn-success">Registrasi</button>
                    </div>
                    <hr>
                </form>
            </div>
            <div class="col-md-4">
            </div>
        </div>
    </div>
    <!--register end-->
  </body>
</html>