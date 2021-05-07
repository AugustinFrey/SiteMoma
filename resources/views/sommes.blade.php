@extends('layouts.main') @section('css')
<link rel="stylesheet" href="{{ asset('assets/css/page.css') }}" />
<style>
.bottom-right {
  position: absolute;
  bottom: 8px;
  top: 60%
}

.absolute {
    position: absolute;
    width: 90%;
    height: 100%;
    background-size: auto;
    display: table;
}

.centerd {
    display: table-cell;
    vertical-align: bottom !important;
    text-align: center;
}
.card .headline{
    margin-bottom: 10px !important;
}
.card .headline h3{
    color: white;
}
</style>
@endsection @section('content')
<!-- PAGE CONTENT -->
<div id="page-content">
    <div id="page-header">
        <div
            class="ken-burns"
            style="background-image:url('assets/images/SommesNous1.jpg'); background-position: center;"
        ></div>

        <div class="overlay"></div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <i class="decode-icon- wow tada"></i>
                    <h2><strong>Qui</strong> sommes-nous ?</h2>

                </div>
                <!-- col -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- page-header -->

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-9">
                        <h5 style="font-weight:bolder;padding-right:40px"> Proposer de solutions managériales sur Ia base de recherches scientifique pour Ies organisations de santé</h5>
                    </div>

                    <div class="col-md-6 text-justify">
                        <p>L'ambition de la chaire INNOV'ERE SANTE est de développer une réflexion en profondeur sur les facteurs de réussite permettant de combiner d la fois la performance financiöre, organisationnelle, innovations, gestion des ressources humaineset les valeurs et les missions du secteur de la santé </p>
                    </div>

                     <div class="col-md-6 text-justify">
                         <p>Nous portons nos efforts sur la recherche d'une performance durable associant les diverses parties prenantes. En nous appuyant sur la recherche en sciences de gestion, nous proposons d'aider les organisations de santé dans leur pilotage stratégique. </p>
                    </div>
                </div>


            </div>
            <!-- col -->
            <div class="col-md-4">
                <img class="img-responsive" src="{{asset('assets/images/Image chercheurs.jpg')}}">
                <!-- widget-contact -->
            </div>
            <!-- col -->
        </div>
        <!-- row -->
    </div>
    <!-- container -->

     <section class="full-section" id="section-25" style="margin-top: 50px;">
        <div class="full-section-container">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div class="headline text-center">


                            <h3>Présentation <strong>des membres.</strong></h3>
                            <hr />
                            <p>Les membres de la chaire sont des universitaires disposant d'une expérience professionnelle et d'une connaissance du secteur sanitaire et médico-sociale :</p>

                        </div><!-- headline -->

                    </div><!-- col -->



                </div><!-- row -->
                <div class="row">

                    @foreach ($teams as $item)
                        <div class="col-md-4 mb-4">

                            <div class="card text-white">
                                <img class="card-img" src="{{config('app.site_url').'storage/'.$item->picture}}" alt="Card image">
                                <div class="card-img-overlay d-flex flex-column">

                                    <div class="mt-auto text-center">
                                        <div class="headline">
                                            <h3><strong>{{$item->first_name}}</strong> {{$item->last_name}}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    @endforeach

                </div>
            </div><!-- container -->

        </div><!-- full-section-container -->
    </section>
</div>
<!-- PAGE CONTENT -->

@endsection
