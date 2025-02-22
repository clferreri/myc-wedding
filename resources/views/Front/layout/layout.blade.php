<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Page Title -->
    <title>La boda de Meli y Cris</title>

    <!-- Favicon and Touch Icons -->
    {{-- <link href="images/favicon/favicon.png" rel="shortcut icon" type="image/png">
    <link href="images/favicon/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="images/favicon/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
    <link href="images/favicon/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
    <link href="images/favicon/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144"> --}}

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon fonts -->
    <link href="{{asset('Front/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('Front/css/flaticon.css')}}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('Front/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Plugins for this template -->
    <link href="{{asset('Front/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('Front/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('Front/css/owl.theme.css')}}" rel="stylesheet">
    <link href="{{asset('Front/css/slick.css')}}" rel="stylesheet">
    <link href="{{asset('Front/css/slick-theme.css')}}" rel="stylesheet">
    <link href="{{asset('Front/css/owl.transitions.css')}}" rel="stylesheet">
    <link href="{{asset('Front/css/jquery.fancybox.css')}}" rel="stylesheet">
    <link href="{{asset('Front/css/magnific-popup.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('Front/css/style.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="home">

    <!-- start page-wrapper -->
    <div class="page-wrapper">

        <!-- start preloader -->
        <div class="preloader">
            <div class="inner">
                <span class="icon"><i class="fi flaticon-two"></i></span>
            </div>
        </div>
        <!-- end preloader -->


        <!-- strat music-box -->
        <div class="music-box">
            <button class="music-box-toggle-btn">
                <i class="fa fa-music"></i>
            </button>

            <div class="music-holder">
                <iframe src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/326494474&amp;auto_play=true&amp;hide_related=true&amp;show_comments=false&amp;show_user=false&amp;show_reposts=false&amp;visual=false"></iframe>
            </div>
        </div>
        <!-- end music box -->


        <!-- start of hero -->
        @include('Front.layout.home')
        <!-- end of hero slider -->

        <!-- Start header -->
        @include('Front.layout.header')
        <!-- end of header -->

        <!-- start wedding-couple-section -->
        @include('Front.layout.couple')
        <!-- end wedding-couple-section -->

        <!-- start count-down-section -->
        <section class="count-down-section section-padding parallax" data-bg-image="images/countdown-bg.jpg" data-speed="7">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <h2><span>Contamos los días para ...</span> ¡Nuestro sí!</h2>
                    </div>
                    <div class="col-lg-8">
                        <div class="count-down-clock">
                            <div id="clock">

                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end count-down-section -->

        <!-- start story-section -->
        {{-- @include('Front.layout.story') --}}
        <!-- end story-section -->

        <!-- start cta -->
        <section class="cta section-padding parallax" data-bg-image="images/cta-bg.jpg" data-speed="7">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h2><span>Vamos a...</span> Celebrar Nuestro Amor</h2>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end cta -->

        <!-- start events-section -->
        @include('Front.layout.event')
        <!-- end events-section -->

        <!-- start inportant-people-section -->
        {{-- @include('Front.layout.people') --}}
        <!-- end inportant-people-section -->

        <!-- start gallery-section -->
        <section class="gallery-section section-padding" id="gallery">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="section-title">
                            <div class="vertical-line"><span><i class="fi flaticon-two"></i></span></div>
                            <h2>Our gallery</h2>
                        </div>
                    </div>
                </div> <!-- end section-title -->

                <div class="row">
                    <div class="col col-xs-12 sortable-gallery">
                        <div class="gallery-filters">
                            <ul>
                                <li><a data-filter="*" href="#" class="current">All</a></li>
                                <li><a data-filter=".wedding" href="#">Wedding</a></li>
                                <li><a data-filter=".ceremony" href="#">Ceremony</a></li>
                                <li><a data-filter=".party" href="#">Party</a></li>
                            </ul>
                        </div>

                        <div class="gallery-container gallery-fancybox masonry-gallery">
                            <div class="grid wedding">
                                <a href="images/gallery/img-1.jpg" class="fancybox" data-fancybox-group="gall-1">
                                    <img src="images/gallery/img-1.jpg" alt class="img img-fluid">
                                </a>
                            </div>
                            <div class="grid wedding ceremony">
                                <a href="images/gallery/img-2.jpg" class="fancybox" data-fancybox-group="gall-1">
                                    <img src="images/gallery/img-2.jpg" alt class="img img-fluid">
                                </a>
                            </div>
                            <div class="grid ceremony eudcation">
                                <a href="images/gallery/img-3.jpg" class="fancybox" data-fancybox-group="gall-1">
                                    <img src="images/gallery/img-3.jpg" alt class="img img-fluid">
                                </a>
                            </div>
                            <div class="grid wedding party">
                                <a href="images/gallery/img-4.jpg" class="fancybox" data-fancybox-group="gall-1">
                                    <img src="images/gallery/img-4.jpg" alt class="img img-fluid">
                                </a>
                            </div>
                            <div class="grid ceremony">
                                <a href="images/gallery/img-5.jpg" class="fancybox" data-fancybox-group="gall-1">
                                    <img src="images/gallery/img-5.jpg" alt class="img img-fluid">
                                </a>
                            </div>
                            <div class="grid party">
                                <a href="images/gallery/img-6.jpg" class="fancybox" data-fancybox-group="gall-1">
                                    <img src="images/gallery/img-6.jpg" alt class="img img-fluid">
                                </a>
                            </div>
                            <div class="grid wedding">
                                <a href="images/gallery/img-7.jpg" class="fancybox" data-fancybox-group="gall-1">
                                    <img src="images/gallery/img-7.jpg" alt class="img img-fluid">
                                </a>
                            </div>
                            <div class="grid ceremony">
                               <!--  <a href="images/gallery/img-8.jpg" class="fancybox" data-fancybox-group="gall-1">
                                    <img src="images/gallery/img-8.jpg" alt class="img img-fluid">
                                </a> -->
                                <a href="https://www.youtube.com/embed/m5w5O9EW8Q0" data-type="iframe" class="video-play-btn">
                                    <img src="images/gallery/img-8.jpg" alt class="img img-fluid">
                                    <i class="fa fa-play"></i>
                                </a>

                            </div>
                            <div class="grid ceremony">
                                <a href="images/gallery/img-9.jpg" class="fancybox" data-fancybox-group="gall-1">
                                    <img src="images/gallery/img-9.jpg" alt class="img img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end gallery-section -->

        <!-- start getting-there-section -->
        <section class="getting-there-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="section-title-white">
                            <div class="vertical-line"><span><i class="fi flaticon-two"></i></span></div>
                            <h2>Getting there</h2>
                        </div>
                    </div>
                </div> <!-- end section-title -->

                <div class="row content">
                    <div class="col col-lg-6">
                        <h3>Transportation</h3>
                        <p> industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s</p>
                    </div>
                    <div class="col col-lg-6">
                        <h3>Accommodations</h3>
                        <p> industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s</p>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end getting-there-section -->

        <!-- start gift-registration-section -->
        <section class="gift-registration-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section-title">
                            <div class="vertical-line"><span><i class="fi flaticon-two"></i></span></div>
                            <h2>Gift registration</h2>
                        </div>
                    </div>
                </div> <!-- end section-title -->

                <div class="row content justify-content-center">
                    <div class="col-lg-10">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, cupiditate, repudiandae. A ab sit laboriosam quis distinctio dignissimos, nemo cum sed hic, deleniti maiores rem iste labore commodi perferendis cumque.repudiandae. A ab sit laboriosam quis distinctio dignissimos, nemo cum sed hic.</p>

                        <div class="gif-registration-slider">
                            <div class="register">
                                <img src="images/gift/img-1.jpg" alt class="img img-fluid">
                            </div>
                            <div class="register">
                                <img src="images/gift/img-2.jpg" alt class="img img-fluid">
                            </div>
                            <div class="register">
                                <img src="images/gift/img-3.jpg" alt class="img img-fluid">
                            </div>
                            <div class="register">
                                <img src="images/gift/img-1.jpg" alt class="img img-fluid">
                            </div>
                            <div class="register">
                                <img src="images/gift/img-2.jpg" alt class="img img-fluid">
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end gift-registration-section -->

        <!-- start footer -->
        <footer class="site-footer">
            <div class="back-to-top">
                <a href="#" class="back-to-top-btn"><span><i class="fi flaticon-cupid"></i></span></a>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h2>Forever And Always Our Love</h2>
                        <span>- Mick (The groom)</span>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </footer>
        <!-- end footer -->

    </div>
    <!-- end of page-wrapper -->



    <!-- All JavaScript files
    ================================================== -->
    <script src="{{asset('Front/js/jquery.min.js')}}"></script>
    <script src="{{asset('Front/js/bootstrap.min.js')}}"></script>

    <!-- Plugins for this template -->
    <script src="{{asset('Front/js/jquery-plugin-collection.js')}}"></script>

    <!-- Custom script for this template -->
    <script src="{{asset('Front/js/script.js')}}"></script>
</body>
</html>
