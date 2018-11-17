<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/custom.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/fontawesome/css/fontawesome-all.min.css">

    <title>Learning Space</title>
  </head>
  <body>
    <!--header-->
    <nav class="navbar sticky-top navbar-expand-sm navbar-dark setting-menu">
      <div class="container">
       <a class="navbar-brand text-center" href="index.html"><b>Learning Space</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
          <li class="nav-item active mr-4">
              <a class="nav-link" href="<?php echo site_url('auth/beranda'); ?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item mr-4">
              <a class="nav-link" href="<?php echo site_url('auth/about'); ?>">About</a>
            </li>
            <li class="nav-item mr-4">
              <a class="nav-link" href="<?php echo site_url('auth/contact'); ?>">Contact</a>
            </li>
            <li class="nav-item mr-4">
              <a class="nav-link" href="#">Our Product</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
    <!--header end-->

    <!--content-->
    <div class="container">
      <div class="row my-3">
        <div class="col-md-12">
          <!--BISA DI UBAH-->
          <!--BISA DI UBAH-->
          <main role="main">
            <section class="jumbotron text-center">
              <div class="container">
                <h1 class="jumbotron-heading">Kelas 1</h1>
                <p class="lead text-muted">Pada tingkat Kelas 1, Materi yang dapat diakses meliputi Matematika, Bahasa Indonesia, Agama Islam, serta video-video pelajaran setiap materi.</p>
              </div>
            </section>
           </main>
           <div class="row">
             <div class="col-md-2"></div>
             <div class="col-md-8">
               <div class="accordion" id="accordionExample">
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h5 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Documents
                        </button>
                      </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body">
                        <button type="button" class="btn btn-outline-secondary"><a href="<?php echo base_url(); ?>/assets/documents/kelas1/kelas 1 agama islam.pdf">Agama Islam</a></button>
                        <button type="button" class="btn btn-outline-secondary"><a href="<?php echo base_url(); ?>/assets/documents/kelas1/kelas 1 Bahasa Indonesia.pdf">Bahasa Indonesia</a></button>
                        <button type="button" class="btn btn-outline-secondary"><a href="<?php echo base_url(); ?>/assets/documents/kelas1/kelas 1 Matematika.pdf">Matematika</a></button>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingTwo">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Videos
                        </button>
                      </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                      <div class="card-body">
                        <button type="button" class="btn btn-outline-secondary video-btn" data-toggle="model"><a href="<?php echo base_url(); ?>/assets/videos/kelas1/Kelas 1 Materi 1.MP4">Matematika</a></button>
                        <button type="button" class="btn btn-outline-secondary video-btn" data-toggle="model"><a href="<?php echo base_url(); ?>/assets/videos/kelas1/Kelas 1 Materi 2.WEBM">Bahasa Inggris</a></button>
                      </div>
                    </div>
                  </div>
                </div>
             </div>
             <div class="col-md-2"></div>
           </div>          
          </div>
        </div>
      </div>

    <!--content end-->

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
                <h5>About Learning Space</h5>
                <ul class="list-group">
                  <li class="list-group-item"><a href="about">Tentang Kami</a></li>
                  <li class="list-group-item"><a href="ourteam">Tim Kami</a></li>
                </ul>
              </div>
              <div class="col-md-6">
                <h5>Others Link</h5>
                <ul class="list-group">
                  <li class="list-group-item"><a href="registrasi">Registrasi</a></li>
                  <li class="list-group-item"><a href="">Panduan</a></li>
                  <li class="list-group-item"><a href="">Syarat dan Ketentuan</a></li>
                  <li class="list-group-item"><a href="">Testimoni</a></li>
                  
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