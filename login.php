<!DOCTYPE html>
<html>
<head>
    <title>Learning Space</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
</head>
<body>
    <!--login-->
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4 col-md-offset-3">
            <center><h2>LOGIN</h2></center>
                <hr>
                <form class="form-horizontal" method="POST" action="<?php echo site_url("auth/proses_login"); ?>">
                    <div class="from-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo set_value("email"); ?>">
                        <?php echo form_error('email'); ?>
                    </div>
                    <div class="from-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo set_value("password"); ?>">
                        <?php echo form_error('password'); ?>
                    </div>
                    <hr>
                    <div class="from-group">
                        <button type="submit" class="btn btn-success">Login</button>
                    </div>
                    <label class="signup">
                    <p>Murid Baru ? <a href="registrasi">Registrasi-></a></p>
                  </label>
                </form>
            </div>
            <div class="col-md-4">
            </div>
        </div>
    </div>
    <!--login end-->
  </body>
</html>