<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PPDB</title>
    <link rel="shorcut icon" href="<?php echo base_url() . 'theme/images/icon.png' ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/bootstrap.min.css' ?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/font-awesome.min.css' ?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/simple-line-icons.css' ?>">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/slick.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/slick-theme.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/owl.carousel.min.css' ?>">
    <!-- Main CSS -->
    <link href="<?php echo base_url() . 'theme/css/style.css' ?>" rel="stylesheet">
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
    <div data-toggle="affix" style="border-bottom:solid 1px #f2f2f2;">
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
                                    <a class="nav-link" href="<?php echo site_url('pengumuman'); ?>">Pendaftaran</a>
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
    </section>
    <!--//END HEADER -->

    <section class="our-teachers">
        <div class="container ">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mb-5">Pendaftaran Peserta Didik Baru</h2>
                </div>
            </div>

            <body class="hold-transition login-page">
                <div class="login-box col-lg-6 col-12" style="margin: 0 auto;">
                    <div>
                        <p><?php echo $this->session->flashdata('msg'); ?></p>
                    </div>
                    <!-- /.login-logo -->
                    <div class="login-box-body">
                        <p class="login-box-msg text-center font-size: 100px;">REGISTRASI SISWA</P>
                        <hr />

                        <form action="<?php echo site_url() . 'admin/login/auth' ?>" method="post">
                            <div class="form-group has-feedback">
                                <input type="text" name="username" class="form-control" placeholder="Username" required>
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <input type="password" name="password" class="form-control" placeholder="Password" required>
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                            </div>
                            <div class="row d-flex justify-content-between">

                                <!-- /.col -->
                                <div class="col-xs-4 ml-3">
                                    <button type="submit" class="btn btn-primary btn-block btn-flat ">Log In</button>
                                </div>
                                <div class="col-xs-4 mr-3">
                                    <a href="#" class="text-primary">Register</a>
                                </div>

                                <!-- /.col -->
                            </div>
                        </form>


                        <!-- /.social-auth-links -->

                    </div>

                    <!-- End row -->

                </div>
    </section>

    <!--//End Style 2 -->
    <!--============================= FOOTER =============================-->

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