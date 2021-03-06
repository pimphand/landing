<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Apk Demo | Show Project">

    <!-- ========== Page Title ========== -->
    <title>Apk Demo | Show Project</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="https://validthemes.online/themeforest/digilab/assets//img/favicon.png"
        type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="https://validthemes.online/themeforest/digilab/assets//css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://validthemes.online/themeforest/digilab/assets//css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://validthemes.online/themeforest/digilab/assets//css/flaticon-set.css" rel="stylesheet" />
    <link href="https://validthemes.online/themeforest/digilab/assets//css/magnific-popup.css" rel="stylesheet" />
    <link href="https://validthemes.online/themeforest/digilab/assets//css/owl.carousel.min.css" rel="stylesheet" />
    <link href="https://validthemes.online/themeforest/digilab/assets//css/owl.theme.default.min.css"
        rel="stylesheet" />
    <link href="https://validthemes.online/themeforest/digilab/assets//css/animate.css" rel="stylesheet" />
    <link href="https://validthemes.online/themeforest/digilab/assets//css/bootsnav.css" rel="stylesheet" />
    <link href="https://validthemes.online/themeforest/digilab/style.css" rel="stylesheet">
    <link href="https://validthemes.online/themeforest/digilab/assets//css/responsive.css" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://validthemes.online/themeforest/digilab/assets//js/html5/html5shiv.min.js"></script>
      <script src="https://validthemes.online/themeforest/digilab/assets//js/html5/respond.min.js"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">

</head>

<body>

    <!-- Start Banner 
    ============================================= -->
    <div class="banner-area demo-banner bg-fixed text-light shadow dark text-center"
        style="background-image: url(https://validthemes.online/themeforest/digilab/assets//img/banner/1.jpg);">
        <div class="box-table">
            <div class="box-cell">
                <div class="container demo-banner">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="https://validthemes.online/themeforest/digilab/assets//img/logo-light-large.png"
                                alt="Logo">
                            <h1>Jasa Pembuatan Website dan Aplikasi </h1>
                            <a class="btn circle btn-gradient effect smooth-menu btn-md" href="#demo">View All
                                Demos
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Start Demo 
    ============================================= -->
    <div id="demo" class="demo-area bg-gray demo-conten default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 site-heading text-center">
                    <h2>Main Homepage</h2>
                </div>
            </div>
            <div class="row">

                @foreach ($data as $item)
                <div class="col-md-6 col-sm-6 item equal-height">
                    <div class="single-item wow fadeInUp">
                        <a target="_blank" href="{{ $item->url }}">
                            <img src="{{ asset('images/'. $item->image) }}" alt="{{ $item->slug }}">
                        </a>
                        <div class="info">
                            <h4>{{ $item->name }}</h4>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- End Demo -->

    <!-- Start Footer 
    ============================================= -->
    <footer class="text-light demo default-padding centered bg-dark text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="logo">
                        <img src="https://validthemes.online/themeforest/digilab/assets//img/logo-light.png" alt="Logo">
                    </div>
                    <div class="copyright">
                        <p>&copy; Copyright 2020. Digilab Template By <a href="http://apk-demo.my.id/demo/1">Faisal
                                Dwiki AMrizal</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="https://validthemes.online/themeforest/digilab/assets//js/jquery-1.12.4.min.js"></script>
    <script src="https://validthemes.online/themeforest/digilab/assets//js/bootstrap.min.js"></script>
    <script src="https://validthemes.online/themeforest/digilab/assets//js/equal-height.min.js"></script>
    <script src="https://validthemes.online/themeforest/digilab/assets//js/jquery.appear.js"></script>
    <script src="https://validthemes.online/themeforest/digilab/assets//js/jquery.easing.min.js"></script>
    <script src="https://validthemes.online/themeforest/digilab/assets//js/jquery.magnific-popup.min.js"></script>
    <script src="https://validthemes.online/themeforest/digilab/assets//js/modernizr.custom.13711.js"></script>
    <script src="https://validthemes.online/themeforest/digilab/assets//js/owl.carousel.min.js"></script>
    <script src="https://validthemes.online/themeforest/digilab/assets//js/wow.min.js"></script>
    <script src="https://validthemes.online/themeforest/digilab/assets//js/isotope.pkgd.min.js"></script>
    <script src="https://validthemes.online/themeforest/digilab/assets//js/imagesloaded.pkgd.min.js"></script>
    <script src="https://validthemes.online/themeforest/digilab/assets//js/count-to.js"></script>
    <script src="https://validthemes.online/themeforest/digilab/assets//js/bootsnav.js"></script>
    <script src="https://validthemes.online/themeforest/digilab/assets//js/typed.js"></script>
    <script src="https://validthemes.online/themeforest/digilab/assets//js/main.js"></script>

</body>

</html>