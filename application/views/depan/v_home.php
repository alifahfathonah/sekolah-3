<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SMP 1 Bandar - Selamat Datang di SMP 1 Bandar</title>
    <link rel="shorcut icon" href="<?php echo base_url() . 'theme/images/icon.png' ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/bootstrap.min.css' ?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/font-awesome.min.css' ?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/simple-line-icons.css' ?>">
    <!-- Slider / Carousel -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/slick.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/slick-theme.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/owl.carousel.min.css' ?>">
    <!-- Main CSS -->
    <link href="<?php echo base_url() . 'theme/css/style.css' ?>" rel="stylesheet">
    <?php
    function limit_words($string, $word_limit)
    {
        $words = explode(" ", $string);
        return implode(" ", array_splice($words, 0, $word_limit));
    }
    ?>
</head>

<body>
    <!--============================= HEADER =============================-->
    <div class="header-topbar">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-8 col-md-9">
                    <div class="header-top_address">
                        <div class="header-top_list">
                            <span class="icon-phone"></span>(0285) 689052
                        </div>
                        <div class="header-top_list">
                            <span class="icon-envelope-open"></span>spensada@gmail.com
                        </div>
                        <div class="header-top_list">
                            <span class="icon-location-pin"></span>Jl. Raya Sidomuyo, Bandar, Batang, Jawa Tengah
                        </div>
                    </div>
                    <div class="header-top_login2">
                        <a href="<?php echo site_url('contact'); ?>">Hubungi Kami</a>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3">
                    <div class="header-top_login mr-sm-3">
                        <a href="<?php echo site_url('contact'); ?>">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-toggle="affix">
        <div class="container nav-menu2">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar2 navbar-toggleable-md navbar-light bg-faded">
                        <button class="navbar-toggler navbar-toggler2 navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
                            <span class="icon-menu"></span>
                        </button>
                        <a href="<?php echo site_url(''); ?>" class="navbar-brand nav-brand2"><img class="img img-responsive" width="100px;" src="<?php echo base_url() . 'theme/images/logo.jpeg' ?>"></a>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url(''); ?>">Home</a>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link" href="<?php echo site_url('profile'); ?>">Profile</a>


                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('guru'); ?>">Guru</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('ppdb'); ?>">PPDB</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('informasi'); ?>">Informasi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('pendaftaran'); ?>">Pendaftaran</a>
                                </li>
                                <!-- <li class="nav-item">
                                  <a class="nav-link" href="<?php echo site_url('agenda'); ?>">Agenda</a>
                              </li> -->
                                <!--                               <li class="nav-item">
                                  <a class="nav-link" href="<?php echo site_url('download'); ?>">Download</a>
                              </li>
 -->
                                <li class="dropdown">
                                    <a class="nav-link" href="<?php echo site_url('galeri'); ?>">Gallery</a>

                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('contact'); ?>">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="slider_img layout_two">
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block" src="<?php echo base_url() . 'theme/images/ruang.jpeg' ?>" alt="First slide">
                        <div class="carousel-caption d-md-block">
                            <div class="slider_title">
                                <h1> SELAMAT DATANG DI SMP NEGERI 1 BANDAR</h1>
                                <h3>Dengan memiliki ilmu kita dapat menggenggam dunia, dan mengejar mimpi besar yang kita punya. Sehingga akan menjadi orang yang berguna bagi masyarakat dan bangsa. </h3>

                                <div class="slider-btn">
                                    <a href="<?php echo site_url('artikel'); ?>" class="btn btn-default">Learn more</a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="<?php echo base_url() . 'theme/images/lab.jpeg' ?>" alt="Second slide">
                        <div class="carousel-caption d-md-block">
                            <div class="slider_title">
                                <h1>Guru Bekualitas Tinggi</h1>
                                <h4>Guru merupakan faktor penting dalam proses belajar-mengajar.<br> Guru adalah ujung tombak generasi tunas bangsa, <br>gurulah yang pertama mengukir akan dijadikan apa generasi muda ini.</h4>
                                <div class="slider-btn">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="<?php echo base_url() . 'theme/images/ruangan.jpeg' ?>" alt="Third slide">
                        <div class="carousel-caption d-md-block">
                            <div class="slider_title">
                                <h1>Proses Belajar </h1>
                                <h4>Kesuksesan seseorang berbanding lurus dengan kemauannya <br> untuk belajar, bangkit, dan mencoba.<br></h4>
                                <div class="slider-btn">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <i class="icon-arrow-left fa-slider" aria-hidden="true"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <i class="icon-arrow-right fa-slider" aria-hidden="true"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
    <!--//END HEADER -->
    <!--============================= ABOUT =============================-->
    <section class="clearfix about about-style2">


        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2>Selamat Datang di SMP Negeri 1 Bandar</h2>
                    <p>Dengan adanya Website ini diharapkan dapat memberikan informasi kepada masyarakat dan calon siswa baru mengenai sekolah kita. </p>

                </div>
                <div class="col-md-4">
                    <img src="<?php echo base_url() . 'theme/images/admin.jpg' ?>" class="img-fluid about-img" alt="#">
                </div>
            </div>
        </div>
    </section>
    <!--//END ABOUT -->
    <!--============================= OUR COURSES =============================-->
    <section class="our_courses">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Artikel Terkini</h2>
                </div>
            </div>
            <div class="row">
                <?php foreach ($berita->result() as $row) : ?>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="courses_box mb-4">
                            <div class="course-img-wrap">
                                <img src="<?php echo base_url() . 'assets/images/' . $row->tulisan_gambar; ?>" class="img-fluid" alt="courses-img">
                            </div>
                            <!-- // end .course-img-wrap -->
                            <a href="<?php echo site_url('artikel/' . $row->tulisan_slug); ?>" class="course-box-content">
                                <h3 style="text-align:center;"><?php echo $row->tulisan_judul; ?></h3>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div> <br>
            <div class="row">
                <div class="col-md-12 text-center">
                    <a href="<?php echo site_url('artikel'); ?>" class="btn btn-default btn-courses">View More</a>
                </div>
            </div>
        </div>
    </section>
    <!--//END OUR COURSES -->
    <!--============================= EVENTS =============================-->

    <!--//END EVENTS -->
    <!--============================= DETAILED CHART =============================-->
    <div class="detailed_chart">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-4 ">

                </div>
                <div class="col-md-4 col-xs-4 ">
                    <div class="chart-img">
                        <img src="<?php echo base_url() . 'theme/images/chart-icon_1.png' ?>" class="img-fluid" alt="chart_icon">
                    </div>
                    <div class="chart-text">
                        <p><span class="counter"><?php echo $tot_guru; ?></span> Guru
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 ">
                    <div class="chart-img">
                        <img src="<?php echo base_url() . 'theme/images/chart-icon_2.png' ?>" class="img-fluid" alt="chart_icon">
                    </div>
                    <div class="chart-text">
                        <p><span class="counter"><?php echo $tot_siswa; ?></span> Siswa
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">

                </div>
            </div>
        </div>
    </div>
    <!--//END DETAILED CHART -->
    <!--============================= FOOTER =============================-->
    <!-- <footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="foot-logo">
                    <a href="<?php echo site_url(); ?>">
                        <img src="<?php echo base_url() . 'theme/images/logo-white.png' ?>" class="img-fluid" alt="footer_logo">
                    </a>
                    <p><?php echo date('Y'); ?> © copyright by <a href="http://mfikri.com" target="_blank">M Fikri</a>. <br>All rights reserved.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sitemap">
                        <h3>Menu Utama</h3>
                        <ul>
                            <li><a href="<?php echo site_url(); ?>">Home</a></li>
                            <li><a href="<?php echo site_url('profile'); ?>">Profile</a></li>
                            <li><a href="<?php echo site_url('artikel'); ?>">Blog </a></li>
                            <li><a href="<?php echo site_url('galeri'); ?>">Gallery</a></li>
                            <li><a href="<?php echo site_url('contact'); ?>">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                  <div class="sitemap">
                      <h3>Akademik</h3>
                      <ul>
                          <li><a href="<?php echo site_url('guru'); ?>">Guru</a></li>
                          <li><a href="<?php echo site_url('siswa'); ?>">Siswa </a></li>
                          <li><a href="<?php echo site_url('pengumuman'); ?>">Pengumuman</a></li>
                          <li><a href="<?php echo site_url('agenda'); ?>">Agenda</a></li>
                          <li><a href="<?php echo site_url('download'); ?>">Download</a></li>
                      </ul>
                  </div>
                </div>
                <div class="col-md-3">
                    <div class="address">
                        <h3>Hubungi Kami</h3>
                        <p><span>Alamat: </span> Padang, Sumatera Barat, INA. 11001</p>
                        <p>Email : info@mschool.com
                            <br> Phone : +91 555 668 986</p>
                            <ul class="footer-social-icons">
                                <li><a href="#"><i class="fa fa-facebook fa-fb" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin fa-in" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter fa-tw" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer> -->
    <!--//END FOOTER -->
    <!-- jQuery, Bootstrap JS. -->
    <script src="<?php echo base_url() . 'theme/js/jquery.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/tether.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/bootstrap.min.js' ?>"></script>
    <!-- Plugins -->
    <script src="<?php echo base_url() . 'theme/js/slick.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/waypoints.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/counterup.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/owl.carousel.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/validate.js' ?>"></script>
    <script src="<?php echo base_url() . 'theme/js/tweetie.min.js' ?>"></script>
    <!-- Subscribe -->
    <script src="<?php echo base_url() . 'theme/js/subscribe.js' ?>"></script>
    <!-- Script JS -->
    <script src="<?php echo base_url() . 'theme/js/script.js' ?>"></script>
</body>

</html>