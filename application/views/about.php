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
       <a class="navbar-brand text-center text-white">Learning<i>Space</i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active mr-4">
              <a class="nav-link" href="beranda">Home</a>
            </li>
            <li class="nav-item mr-4">
              <a class="nav-link" href="about">About<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item mr-4">
              <a class="nav-link" href="contact">Contact</a>
            </li>
            <li class="nav-item mr-4">
              <a class="nav-link" href="login">Our Product</a>
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
          <!-- SLIDER HERE -->
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="<?php echo base_url(); ?>/assets/images/student3.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo base_url(); ?>/assets/images/student2-1.png" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo base_url(); ?>/assets/images/student2-2.png" alt="Third slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo base_url(); ?>/assets/images/student2-3.png" alt="fourth slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div> 
      </div>
    </div>
    <div class="container content">
      <div class="row my-3">
        
        <div class="col-md-12">
          <div class="accordion" id="accordionExample">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Latar Belakang
                  </button>
                </h5>
              </div>

              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  <p>Pendidikan merupakan salah satu faktor utama dalam pembentukan pribadi manusia secara normatif baik untuk kalangan pelajar maupun kalangan umum. Secara garis besar pendidikan bertujuan untuk mencerdaskan kehidupan bangsa dan mengembangkan manusia yang seutuhnya yaitu beriman dan bertakwa kepada Tuhan Yang Maha Esa dan berbudi pekerti luhur, memiliki pengetahuan dan keterampilan, kesehatan jasmani dan rohani, kepribadian yang tangguh dan mandiri serta rasa bertanggung jawab.
                  Seperti yang kita ketahui bahwa pendidikan khususnya disekolah dasar masih banyak kekurangan dalam pembelajaran berbasis internet, dan biasanya siswa siswi menggunakan smartphone-nya hanya untuk bermain game demi kesenangan pribadi, yang kemudian membuat lupa akan kewajiban sebagai seorang pelajar, dimana kewajiban seorang pelajar adalah belajar dengan giat untuk meningkatkan prestasinya di sekolah.
                  Dengan adanya kemajuan teknologi saat ini yang berbasis internet, oleh karena itu kami berinisiatif untuk membuat sebuah aplikasi web yang berjudul “Learning Space”. Learning Space merupakan aplikasi yang menyediakan ruang belajar untuk dapat diakses oleh kalangan umum khususnya bagi para siswa siswi sekolah dasar. Sehingga teknologi yang mereka gunakan tidak sia-sia begitu saja.</p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Visi
                  </button>
                </h5>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                  <p>1. Menciptakan Keberhasilan Dalam Proses Pembelajaran</p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Misi
                  </button>
                </h5>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    <p>1. Meningkatkan Mutu Pembelajaran</p>
                    <p>2. Meningkatkan Kualitas Pengajaran</p>
                    <p>3. Mewujudkan Pembelajaran Yang Inovatif</p>
                    <p>4. Mempermudah Dalam Mengakses Materi Yang Ingin Dipelajari</p>
                    <p>5. Memberikan Pembelajaran Yang Fun </p>
                </div>
              </div>
            </div>
          </div>
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