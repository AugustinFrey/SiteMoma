<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0, shrink-to-fit=no">
        <meta name="keywords" content="">
        <meta name="description" content="">

        <title>Moma Chaires</title>
        <!-- FAVICON AND APPLE TOUCH -->
        <link rel="shortcut icon" href="{{asset('favicon.png')}}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('apple-touch-180x180.png')}}">
        <meta name="msapplication-TileImage" content="mstile.png">
        <meta name="msapplication-TileColor" content="#00f0d1">
        <meta name="theme-color" content="#00f0d1">

        <!-- FONTS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7C;Roboto:100,500">
        <link href="{{asset('assets/images/footer_logo.png')}}" rel="icon" type="image/png">

        <!-- BOOTSTRAP CSS -->
        <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">

        <!-- FONT AWESOME -->
        <link rel="stylesheet" href="{{asset('assets/fonts/fontawesome/css/font-awesome.min.css')}}">

        <!-- DECODE ICONS -->
        <link rel="stylesheet" href="{{asset('assets/fonts/decode-icons/css/decode-icons.min.css')}}">

        <!-- FANCYBOX -->
        <link rel="stylesheet" href="{{asset('assets/plugins/fancybox/jquery.fancybox.min.css')}}">

        <!-- REVOLUTION SLIDER -->
        <link rel="stylesheet" href="{{asset('assets/plugins/revolutionslider/css/settings.css')}}">
        <link rel="stylesheet" href="{{asset('assets/plugins/revolutionslider/css/layers.css')}}">
        <link rel="stylesheet" href="assets/plugins/revolutionslider/css/navigation.css">

        <!-- OWL CAROUSEL -->
        <link rel="stylesheet" href="{{asset('assets/plugins/owl-carousel/owl.carousel.css')}}">

        <!-- COUNTERS -->
        <link rel="stylesheet" href="{{asset('assets/plugins/counters/odometer-theme-default.css')}}">

        <!-- YOUTUBE PLAYER -->
        <link rel="stylesheet" href="{{asset('assets/plugins/ytplayer/css/jquery.mb.ytplayer.min.css')}}">

        <!-- ANIMATIONS -->
        <link rel="stylesheet" href="{{asset('assets/plugins/animations/animate.min.css')}}">

        <!-- CUSTOM & PAGES STYLE -->
        <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/pages-style.css')}}">


        @yield('css')

    </head>

    <body class="sticky-header header-bordered footer-dark">

        <div id="main-container">
            <!-- HEADER -->
            <header id="header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3">
                            <!-- LOGO -->
                            <div id="logo">
                                <a href="/">
                                    <img style="height: 28px;" src="{{asset('assets/images/logo.svg')}}" alt="">
                                </a>
                            </div><!-- LOGO -->
                        </div><!-- col -->
                        <div class="col-md-9">
                            <!-- MENU -->
                            <nav>
                                <a class="mobile-menu-button" href="#"><i class="decode-icon-menu"></i></a>
                                <ul class="menu clearfix" id="menu">
                                    <li class="megamenu {{Request::path() == '/' ? 'active' : ''}}">
                                        <a href="/">Accueil</a>
                                    </li>
                                    <li class="dropdown  {{Request::path() == 'sommes-nous' ? 'active' : ''}}">
                                        <a href="{{route('partner.sommes')}}">Qui sommes-nous ?</a>
                                    </li>
                                    <li class="dropdown {{Request::path() == 'publications' ? 'active' : ''}}">
                                        <a href="/publications">Articles</a>
                                    </li>
                                    <li class="dropdown {{Request::path() == 'partner' ? 'active' : ''}}">
                                        <a href="/partner">Nos partenaires</a>
                                    </li>
                                    <li class="dropdown {{Request::path() == 'contact-us' ? 'active' : ''}}">
                                        <a  href="/contact-us">Contact</a>
                                    </li>
                                    <li class="dropdown {{Request::path() == 'connexion' ? 'active' : ''}}">
                                        <a href="/connexion" class="btn btn-white btn-outline" style="    padding: .5rem .75rem;margin-top: 10px;margin-bottom:0px;    border-radius: 17px;">Connexion</a>
                                    </li>
                                </ul>
                            </nav>
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container-fluid -->
            </header><!-- HEADER -->
            <!-- PAGE CONTENT -->
            @yield('content')

            <!-- PAGE CONTENT -->

            <!-- FOOTER -->
            <footer>

                <div id="footer" style="padding-bottom: 10px;">

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 " style="margin: auto;">

                                <div class="widget widget-text">

                                    <div>

                                        <p><img src="{{asset('assets/images/footer_logo.png')}}" style="    max-width: 63%;" alt=""></p>


                                    </div>

                                </div><!-- widget-text -->

                            </div><!-- col -->
                            <div class="col-md-3">

							<div class="widget widget-pages">

								<h6 class="widget-title">Contact</h6>
                                <hr />

								<ul>
									<li><a href="mailto:contact@innoveres.fr">contact@innoveres.fr</a></li>
									<li>03.02.12.42.24</li>
                                    <li>Address: Rue Vendémiaire, <br class="d-block d-md-none d-lg-block"> 34070 Montpellier</li>
								</ul>

							</div><!-- widget-pages -->

						</div><!-- col -->
                        <div class="col-lg-3 col-md-6">

                            <div class="widget widget-newsletter">

                                <h6 class="widget-title">Nous envoyer un email</h6>
                                <hr />

                            <form name="newsletter" method="post" action="{{route('newsletter')}}">
                                    @csrf
                                    <fieldset>
                                        <div>
                                            <input type="text" name="subscribeemail" placeholder="" required>
                                            <span></span>
                                            <label>Entrez votre mail...</label>
                                            @if ($errors->has('subscribeemail'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('subscribeemail') }}</strong>
                                    </span>
                                    @endif
                                        </div>
                                        <button class="btn btn-white btn-outline waves" type="submit" name="submit" value="">Envoyer</button>
                                    </fieldset>
                                </form>

                            </div><!-- widget-newsletter -->

                        </div><!-- col -->

                        <div class="col-lg-3 col-md-6">

                            <div class="widget widget-social">

                                <h6 class="widget-title">Supprimer les réseaux sociaux</h6>
                                <hr />

                                <div class="social-media rounded">

                                    <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                                    <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                                    <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                                    <a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a>

                                </div><!-- social-media -->

                            </div><!-- widget-social -->

                        </div><!--col -->
                        </div><!-- row -->
                       <div class="row pt-4 pb-10">
                        <div class="col-sm-12 col-md-3"></div>
                        <div class="col-sm-12 col-md-6 copyright" style="padding-top: 8px;">
                            <p class="text-center" style="color: white;">&copy; Copyright - 2020 Innoveres - <a href="#mentions-legales">Mentions l&eacute;gales</a> - <a href="#rgpd">RGPD</a></p>
                        </div>
                        <div class="col-sm-12 col-md-3">
                            <div class="row text-center">
                                <div class="col-xs-6 col-md-6 design_by text-right">
                                    <p style="color: white;margin-top: 14px;">Design by &nbsp;</p>
                                </div>
                                <div class="col-xs-6 col-md-6 design_by_logo" style="padding-left: unset;">
                                    <a href="https://www.etiseo.fr/">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 874.92 283.11"><defs><style>.cls-1{fill:#fff;}</style></defs><title>logo etiseo blanc</title><g id="Calque_2" data-name="Calque 2"><g id="Calque_1-2" data-name="Calque 1"><g id="Calque_1-2-2" data-name="Calque 1-2"><polyline class="cls-1" points="213.63 0 213.63 53.11 213.6 72.74 213.63 72.64 213.63 72.78 213.6 72.74 213.63 87.87 213.63 108.72 212.58 108.72 205.23 108.72 192.2 108.72 177.3 108.72 175.73 108.72 175.73 122.65 175.73 138.9 197.51 138.9 213.88 138.9 213.88 151.12 213.88 163.79 213.88 240.73 213.88 244.32 213.88 244.34 213.88 262.67 213.88 278.36 261.77 278.36 278.35 278.36 278.35 263.39 278.35 248.95 277.63 248.95 272.23 248.95 267.19 248.95 245.03 248.95 245.03 248.56 245.03 242.13 245.03 184.22 245.03 174.43 245.03 164.06 245.03 156.49 245.03 142.49 245.03 139.18 246.42 139.18 254.75 139.18 266.06 139.18 292.12 139.18 292.12 108.72 244.79 108.72 244.79 70.92 244.79 61.95 244.79 61.28 244.79 53.59 244.79 49.32 244.79 49.34 244.79 0"/><path class="cls-1" d="M785.92,104.81c-49.14,0-89,39.31-89,87.78s39.85,87.77,89,87.77,89-39.3,89-87.77S835.06,104.81,785.92,104.81Zm-.56,143.61a56.06,56.06,0,1,1,56.3-56.06A56.06,56.06,0,0,1,785.36,248.42Z"/><path class="cls-1" d="M71.32,213.43l38.42-14.56,35-13.26.28-.1,3.79-1.44,21.51-8.15s-17.81-72.13-79.39-72.13a96.45,96.45,0,0,0-24.1,3h-.06c-1.24.32-2.46.65-3.66,1-28,8.49-46.45,29.39-55.8,51.46a91.06,91.06,0,0,0-7.1,28.63h0c-.12,1.78-.21,3.54-.21,5.25,0,16.57,6.51,36.38,19,53.17a96.56,96.56,0,0,0,12,13.32,93,93,0,0,0,8.44,6.9,86.75,86.75,0,0,0,51.49,16.32,90.27,90.27,0,0,0,13.3-1.8c2.9-.58,6.15-1.39,9.57-2.43a93.21,93.21,0,0,0,14.75-5.86,67.72,67.72,0,0,0,21.24-16.23l-18.41-21.74s-19,15.7-42.87,15.7A56,56,0,0,1,42,224.53l29.1-11ZM33,193.31a73,73,0,0,1,4.14-21.69c5.76-16.3,19.54-35.84,52.61-35.84,1.06,0,2.07.09,3.09.16a43.27,43.27,0,0,1,5.67.71c20.3,4,31.08,20.86,31.08,20.86l-6.41,2.38-3.65,1.35-56.62,21Z"/><path class="cls-1" d="M593.21,213.69l38.42-14.56,35-13.26.17-.29.11.19,3.79-1.44,21.51-8.15s-17.81-72.13-79.39-72.13a96.51,96.51,0,0,0-24.1,3h-.06c-1.24.32-2.45.65-3.65,1-28,8.49-46.45,29.39-55.81,51.46a90.61,90.61,0,0,0-7.08,28.64h0c-.13,1.78-.22,3.54-.22,5.26,0,16.56,6.51,36.37,19,53.16a94.79,94.79,0,0,0,12,13.32,90.13,90.13,0,0,0,8.44,6.91,86.78,86.78,0,0,0,51.48,16.31,90.27,90.27,0,0,0,13.3-1.8c2.9-.58,6.15-1.39,9.58-2.43A92.7,92.7,0,0,0,650.43,273a67.72,67.72,0,0,0,21.24-16.23L653.26,235s-19,15.7-42.86,15.7a56,56,0,0,1-46.49-26l29.1-11Zm-38.35-20.12A72.67,72.67,0,0,1,559,171.88c5.76-16.3,19.54-35.84,52.62-35.84,1.06,0,2.07.09,3.09.16a43.13,43.13,0,0,1,5.66.71c20.31,4,31.09,20.86,31.09,20.86L645,160.15l-3.64,1.35-56.62,21Z"/><path class="cls-1" d="M344.47,69.38a19.86,19.86,0,0,0,13.33-5.2,20.52,20.52,0,0,0-13.33-35.86,20,20,0,0,0-15.81,7.87,20.49,20.49,0,0,0,15.81,33.19Z"/><polygon class="cls-1" points="360.77 172.85 360.78 172.85 360.78 169.91 360.77 169.9 360.77 157.92 360.77 133.57 360.77 128.04 360.77 108.91 339.09 108.91 333.13 108.91 308.34 108.91 298.29 108.91 298.29 110.5 298.29 117.45 298.29 139.1 323.34 139.1 328.38 139.1 329.68 139.1 329.68 140.34 329.68 144.8 329.68 244.45 329.68 244.47 329.68 249.28 328.48 249.28 298.29 249.28 298.29 269.45 298.29 278.56 322.72 278.56 349.09 278.56 353.33 278.56 353.4 278.56 378.74 278.56 392.47 278.56 392.47 268.99 392.47 248.97 360.77 248.97 360.77 172.85"/><path class="cls-1" d="M487.79,228.56a21,21,0,0,1-2.33,9.38,19.94,19.94,0,0,1-2.13,3.32,22.27,22.27,0,0,1-8.19,6.26,38.91,38.91,0,0,1-14.92,3.16c-.78,0-1.5.11-2.33.11a86.31,86.31,0,0,1-10.53-.79c-4.38-.61-9.08-1.71-12-3.66a8.62,8.62,0,0,1-.87-.62V226H405.74v37.87a15.41,15.41,0,0,0,1.93,2.33c4.2,4.37,16.3,13.52,44.48,15.25h0c1.48.08,3.06.13,4.62.18h0c1.56,0,3.05.11,4.69.11,2.57,0,5-.12,7.35-.32h0c36.33-3,48-28.18,50.23-48.73a39.93,39.93,0,0,0,.14-4.09h0v-.21l.21-.23h-.21a37.61,37.61,0,0,0-.38-5.51v-.58a1,1,0,0,0-.07-.33c-.1-.73-.18-1.19-.18-1.19l0,.06h0s-.62-3-.88-3.87h0c-.35-1.24-.77-2.42-1.21-3.58a39.26,39.26,0,0,0-2-4.5c-8.07-15.66-25-23.66-38.34-29-4.51-1.83-8.61-3.37-11.78-4.81-16-7.24-22-11.77-22-22a14.48,14.48,0,0,1,1.47-6.53c3-6.12,10.52-9.46,20.85-9.46h1.2c12.7.21,18.43,3.58,18.43,3.58v21.74h28.07v-38A38.3,38.3,0,0,0,500.25,114a54.46,54.46,0,0,0-10.69-4.55,71.33,71.33,0,0,0-10-2.29,83.39,83.39,0,0,0-16.4-1.07,69.11,69.11,0,0,0-15.7,1.72c-13,3-21.48,9.74-26.91,17.25-6.86,9.48-9,20.18-9.61,26.16a40.69,40.69,0,0,0-.29,4.68,46.25,46.25,0,0,0,4.2,20.06c5.19,11,14.59,17.87,24.61,22.6,11.23,5.3,23.24,7.89,31,10.48a34.4,34.4,0,0,1,6,2.62,22.8,22.8,0,0,1,8.44,7.79c.16.26.27.5.41.76v0a14.42,14.42,0,0,1,2.49,8.49h0"/></g></g></g></svg>
                                    </a>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div><!-- container -->

                </div><!-- footer -->


            </footer><!-- FOOTER -->

        </div><!-- MAIN CONTAINER -->


        <!-- SCROLL UP -->
        <a id="scroll-up" class="waves"><i class="fa fa-angle-up"></i></a>


        <!-- jQUERY -->
        <script src="{{asset('assets/plugins/jquery/jquery-2.2.4.min.js')}}"></script>

        <!-- BOOTSTRAP JS -->
        <script src="{{asset('assets/bootstrap/js/popper.min.js')}}"></script>
        <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>

        <!-- VIEWPORT -->
        <script src="{{asset('assets/plugins/viewport/jquery.viewport.js')}}"></script>

        <!-- MENU -->
        <script src="{{asset('assets/plugins/menu/hoverIntent.js')}}"></script>
        <script src="assets/plugins/menu/superfish.js"></script>

        <!-- FANCYBOX -->
        <script src="{{asset('assets/plugins/fancybox/jquery.fancybox.min.js')}}"></script>

        <!-- REVOLUTION SLIDER  -->
        <script src="{{asset('assets/plugins/revolutionslider/js/jquery.themepunch.tools.min.js')}}"></script>
        <script src="{{asset('assets/plugins/revolutionslider/js/jquery.themepunch.revolution.min.js')}}"></script>
        <script src="{{asset('assets/plugins/revolutionslider/js/extensions/revolution.extension.actions.min.js')}}"></script>
        <script src="{{asset('assets/plugins/revolutionslider/js/extensions/revolution.extension.carousel.min.js')}}"></script>
        <script src="{{asset('assets/plugins/revolutionslider/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
        <script src="{{asset('assets/plugins/revolutionslider/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
        <script src="{{asset('assets/plugins/revolutionslider/js/extensions/revolution.extension.migration.min.js')}}"></script>
        <script src="{{asset('assets/plugins/revolutionslider/js/extensions/revolution.extension.navigation.min.js')}}"></script>
        <script src="{{asset('assets/plugins/revolutionslider/js/extensions/revolution.extension.parallax.min.js')}}"></script>
        <script src="{{asset('assets/plugins/revolutionslider/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
        <script src="{{asset('assets/plugins/revolutionslider/js/extensions/revolution.extension.video.min.js')}}"></script>

        <!-- OWL CAROUSEL -->
        <script src="{{asset('assets/plugins/owl-carousel/owl.carousel.min.js')}}"></script>

        <!-- WATERWHEEL CAROUSEL -->
        <script src="{{asset('assets/plugins/waterwheelcarousel/tweenmax.min.js')}}"></script>
        <script src="{{asset('assets/plugins/waterwheelcarousel/jquery.waterwheelcarousel.min.js')}}"></script>

        <!-- PARALLAX -->
        <script src="{{asset('assets/plugins/parallax/jquery.stellar.min.js')}}"></script>

        <!-- ISOTOPE -->
        <script src="{{asset('assets/plugins/isotope/imagesloaded.pkgd.min.js')}}"></script>
        <script src="assets/plugins/isotope/isotope.pkgd.min.js"></script>

        <!-- CONTACT FORM VALIDATE & SUBMIT -->
        <script src="{{asset('assets/plugins/validate/jquery.validate.min.js')}}"></script>
        <script src="{{asset('assets/plugins/submit/jquery.form.min.js')}}"></script>

        <!-- GOOGLE MAPS -->
        <!-- <script src="http://maps.google.com/maps/api/js"></script>
        <script src="{{asset('assets/plugins/googlemaps/gmap3.min.js')}}"></script> -->

        <!-- CHARTS -->
        <script src="{{asset('assets/plugins/charts/jquery.easypiechart.min.js')}}"></script>

        <!-- COUNTERS -->
        <script src="{{asset('assets/plugins/counters/jquerysimplecounter.js')}}"></script>
        <script src="{{asset('assets/plugins/counters/odometer.min.js')}}"></script>

        <!-- INSTAFEED -->
        <script src="{{asset('assets/plugins/instafeed/instafeed.min.js')}}"></script>

        <!-- TWITTER -->
        <script src="{{asset('assets/plugins/twitter/twitterfetcher.min.js')}}"></script>

        <!-- YOUTUBE PLAYER -->
        <script src="{{asset('assets/plugins/ytplayer/jquery.mb.ytplayer.min.js')}}"></script>

        <!-- COUNTDOWN -->
        <script src="{{asset('assets/plugins/countdown/jquery.countdown.min.js')}}"></script>

        <!-- ANIMATIONS -->
        <script src="{{asset('assets/plugins/animations/wow.min.js')}}"></script>

        <!-- CUSTOM JS -->
        <script src="{{asset('assets/js/custom.js')}}"></script>

    </body>

    </html>
