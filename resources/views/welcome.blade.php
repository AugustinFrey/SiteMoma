@extends('layouts.main')
@section('content')

<div id="page-content">

    <div class="rev_slider_wrapper no-margin-bottom">
        <div class="rev_slider" data-version="5.0">
            <ul>
            @foreach ($sliders as $item)


                    @if(Storage::disk('public')->exists($item->picture))
                    <li data-transition="fade" data-thumb="{{ URL::asset('storage/'.$item->picture) }}">
                                        <img src="{{ URL::asset('storage/'.$item->picture) }}" data-bgposition="center center">

                                        @elseif($isimage = @getimagesize(config('app.site_url').'storage/'.$item->picture))
                                        <li data-transition="fade" data-thumb="{{config('app.site_url').'storage/'.$item->picture}}">
                                          <img src="{{config('app.site_url').'storage/'.$item->picture}}" data-bgposition="center center">
                                        @else
                                        <li data-transition="fade" data-thumb="{{asset('assets/images/header accueil.jpg')}}">
                                        <img src="{{asset('assets/images/header accueil.jpg')}}" alt="" data-bgposition="center center">
                                        @endif


                    <div class="overlay-blend-mode"></div>


                    <div class="tp-caption title" data-x="center" data-y="center" data-voffset="50" data-start="1300"
                        data-speed="300" data-textalign="center" data-transform_in="o:0;y:100;s:500;e:Power2.easeInOut;"
                        data-transform_out="o:0;y:-100;s:500;e:Power2.easeInOut;">
                        <span>{!! $item->short_text!!}</span> {!! $item->long_text !!}
                    </div>



                </li>
            @endforeach


            </ul>



        </div><!-- rev_slider -->
    </div><!-- rev_slider_wrapper -->

    <div class="container" id="next-section">
        <div class="row">
            <div class="col-md-12">

                <div id="section-23">

                    <div class="row">
                        <div class="col-lg-7 col-md-8 ml-auto mr-auto">

                            <div class="headline text-center no-margin-bottom">

                                <div id="logo">
                                    <a href="/">
                                        <img style="height: 120px;" src="{{asset('assets/images/sqaure_logo.svg')}}" alt="">
                                    </a>
                                </div>
                                <h3>Bien plus <strong>qu’une vision </strong></h3>
                                <div class="tilde">˜˜˜˜˜˜˜˜˜</div>

                            </div><!-- headline -->

                        </div><!-- col -->
                    </div><!-- row -->

                    <br>

                    <div class="row">
                        <div class="col-lg-10 col-md-11 ml-auto mr-auto">

                            <p class="text-center">L’ambition de la chaire INNOV’ERE SANTE est de développer une réflexion en profondeur sur les facteurs de réussite permettant de combiner à la fois la performance financière, organisationnelle, innovations, gestion des ressources humaines, les valeurs et les missions du secteur de la santé.</p>



                        </div><!-- col -->
                        <div class="col-lg-10 col-md-11 ml-auto mr-auto text-center">
                            <a class="btn btn-default btn-outline waves waves-dark" href="/sommes-nous">NOUS DÉCOUVRIR</a>
                        </div>
                    </div><!-- row -->

                </div><!-- section-23 -->

            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->



    <section class="full-section dark-section img-bg" id="section-24" style="margin-bottom: 0px;">



        <div class="full-section-container">

            <img class="overlay_image" src="{{asset('assets/images/forme-abstraite.png')}}">

            <div class="col-md-12 mb-3">
                    <div class="tilde vertical">˜˜˜˜˜˜˜˜</div>
                    <h3 class="f-800" style="padding-left: 65px;">Nos articles</h3>
                </div>

            <div class="container mt-5">

                <div class="row">

                    @foreach ($articles as $item)

                    <div class="col-lg-4 p-30">

                            <div class="service-box style-7 large wow zoomIn service-box-bg" style="background: url({{config('app.site_url').'storage/'.$item->picture}}) no-repeat;">

                                <div class="service-box-layer">

                            <!-- <i class="decode-icon-ranking"></i> -->

                            <div class="service-box-content">

                            <h5 style="margin-bottom: 0px;" class="text-left"><a href="{{route('publications.show',['id' => $item->slug])}}">{{$item->title}}</a></h5>
                                <div class="tilde">˜˜˜˜˜˜˜˜˜</div>

                                <p>  {!! str_limit(strip_tags($item->description), $limit = 150, $end = '...') !!} </p>

                            </div><!-- service-box-content -->

                            </div>


                        </div><!-- service-box -->

                    </div><!-- col -->

                    @endforeach

                    <div class="col-lg-10 col-md-11 ml-auto mr-auto text-center">
                        <a class="btn btn-default btn-outline waves waves-dark" style="color: rgba(0, 51, 102, 1);" href="/publications">PLUS D’ARTICLES</a>
                    </div>

                </div><!-- row -->

            </div><!-- services-container -->

        </div><!-- full-section-container -->
    </section><!-- full-section -->

    <section class="full-section dark-section " id="section-47"
        style="margin-top: 0px;margin-bottom: 0px;">

        <div class="full-section-container">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div class="headline text-center" style="margin-bottom: 0px;">


                            <h3>Nous <strong>soutenir.</strong></h3>
                            <div class="tilde" style="color:white;">˜˜˜˜˜˜˜˜˜</div>


                        </div><!-- headline -->

                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->



        </div><!-- full-section-container -->
    </section><!-- full-section -->

    <section class="full-section" style="margin-top: 0px;background: white;margin-bottom: 0px;">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">

                    <div class="headline no-margin-bottom">


                        <h5 style="font-weight: 500;letter-spacing: 0.01rem;">Nous portons nos efforts sur la recherche d’une performance durable associant les diverses parties prenantes. En nous appuyant sur la recherche en sciences de gestion, nous proposons d’aider les organisations de santé dans leur pilotage stratégique.
                        </h5>

                    </div>

                    <br>

                </div><!-- col -->
                <div class="col-lg-6">
                    <h4>La chaire INNOV’ERE SANTE :</h4>
                    <ul>
                        <li>s’engage à proposer des solutions managériales adaptées aux organisations sur la base de recherches scientifiques</li>
                        <li>est composée des spécialistes des domaines suivants : pilotage stratégique, gestion des ressources humaines, conduite du changement, systèmes d’informations, droit et économie</li>
                        <li>s’inscrit dans la dynamique de diffusion des connaissances au travers de l’organisation de journées d’études, de conférences et d’enseignements.</li>
                    </ul>
                    <p class="no-margin-bottom">La chaire est membre de la fondation Entreprendre de l’Université de Montpellier.<br>Votre soutien financier donne lieu à une réduction d’impôts.</p>

                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->

        <br>

        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">

                    <a class="btn btn-default btn-outline waves waves-dark" href="/sommes-nous">EN SAVOIR +</a>

                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->
    </section>


    <section class="full-section" id="section-25" style="margin-top: 0px;">
        <div class="full-section-container">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div class="headline text-center">


                            <h3>Nos <strong>partenaires.</strong></h3>
                            <div class="tilde">˜˜˜˜˜˜˜˜˜</div>
                            <p>Ils nous font confiance</p>

                        </div><!-- headline -->

                    </div><!-- col -->



                </div><!-- row -->
                <div class="row mt-3">
                        @foreach ($logo as $item)
                        <div class="col-md-2 mx-auto mt-3 text-center">
                                @if(Storage::disk('public')->exists($item->picture))

                                                    <img src="{{ URL::asset('storage/'.$item->picture) }}" alt="{{$item->title}}">

                                                    @elseif($isimage = @getimagesize(config('app.site_url').'storage/'.$item->picture))

                        <img src="{{config('app.site_url').'storage/'.$item->picture}}" alt="{{$item->title}}">

                                                    @endif


                        </div>
                        @endforeach

                </div>
            </div><!-- container -->

        </div><!-- full-section-container -->
    </section>
    <!-- full-section -->

</div>

@endsection
