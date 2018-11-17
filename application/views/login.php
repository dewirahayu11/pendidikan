<!DOCTYPE html>
<html>
<head>
    <title>Learning Space</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/custom.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/fontawesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

</head>
<body>
    <!--header-->
    <nav class="navbar sticky-top navbar-expand-sm navbar-dark setting-menu">
      <div class="container">
       <a class="navbar-brand text-center">Learning<i>Space</i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
          <li class="nav-item active mr-4">
              <a class="nav-link" href="beranda">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item mr-4">
              <a class="nav-link" href="about">About</a>
            </li>
            <li class="nav-item mr-4">
              <a class="nav-link" href="contact">Contact</a>
            </li>
            <li class="nav-item mr-4">
              <a class="nav-link" href="#">Our Product</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
          </form>
          </ul>
        </div>
      </div>
    </nav>
    <!--header end-->
    
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

    <!--footer-->
    <div class="container-fluid py-5 text-white footer">
      <div class="conteiner">
        <div class="row">
          <div class="col-md-5">
            <h3>Lokasi</h3>
            <p>Jalan Ryacudu Gang Hasan raya <br>Kel. Korpri Raya Kec. Sukarame <br>Bandar Lampung, Lampung</p>
            <p>phone (021) 123-456 - 123-123 <br>learningspace@gmail.com</p>
          </div>
          <div class="col-md-5">
            <div class="row">
              <div class="col-md-6">
                <h5>About Learning<i>Space</i></h5>
                <ul class="list-group">
                  <li class="list-group-item"><a href="about">Tentang Kami</a></li>
                  <li class="list-group-item"><a href="ourteam">Tim Kami</a></li>
                </ul>
              </div>
              <div class="col-md-6">
                <h5>Others Link</h5>
                <ul class="list-group">
                  <li class="list-group-item"><a href="registrasi">Registrasi</a></li>
                  <li class="list-group-item"><a href="panduan">Panduan</a></li>
                  <li class="list-group-item"><a href="syarat_ketentuan">Syarat dan Ketentuan</a></li>
                  <li class="list-group-item"><a href="testimoni">Testimoni</a></li>
                  
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <h3>sosial media</h3>
            <a href=""><i class="fab fa-facebook-square"></i></a>
            <a href=""><i class="fab fa-twitter-square"></i></a>
            <a href=""><i class="fab fa-linkedin"></i></a>
            <a href=""><i class="fab fa-skype"></i></a>
            <a href=""><i class="fab fa-youtube"></i></a>
          </div>
        </div>
      </div>
    </div>
    <!--footer end-->
    <!--footer buttom-->
    <div class="container-fluid footerButtom">
      <div class="container">
        <div class="row py-2">
          <div class="col-md-12">
            <span>Copyright &copy; Learning Space</span>
          </div>
        </div>
      </div>
    </div>
    <!--footer buttom end-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url(); ?>/assets/js/jquery-3.2.1.slim.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
  </body>
</html>