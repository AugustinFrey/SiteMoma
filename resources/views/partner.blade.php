@extends('layouts.main') @section('css')
<link rel="stylesheet" href="{{ asset('assets/css/page.css') }}" />
@endsection @section('content')
<!-- PAGE CONTENT -->
<div id="page-content">
    <div id="page-header">
        <div
            class="ken-burns"
            style="background-image:url(assets/images/Partenaires7.png); background-position: center;"
        ></div>

        <div class="overlay"></div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <i class="decode-icon- wow tada"></i>
                    <h2>Nos partenaires</h2>
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
            <div class="col-md-12">

                <div class="isotope cols-3">
                    @foreach ($partners as $item)
                    <div class="isotope-item categ-2 categ-4">

                            <div class="portfolio-item">

                                <div class="portfolio-item-thumbnail">

                                    <img src="{{config('app.site_url').'storage/'.$item->picture}}" alt="">

                                    <div class="portfolio-item-hover">

                                        <a class="fancybox zoom-action" data-fancybox="portfolio" href="{{config('app.site_url').'storage/'.$item->picture}}"></a>

                                    </div><!-- portfolio-item-hover -->

                                </div><!-- portfolio-item-thumbnail -->

                                <div class="portfolio-item-description">

                                <h6><a href="#">{{$item->name}}</a></h6>

                                </div><!-- portfolio-item-description -->

                            </div><!-- portfolio-item -->

                        </div><!-- isotope-item -->
                    @endforeach


                </div><!-- isotope -->

            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                    {{ $partners->links() }}

            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->
</div>
<!-- PAGE CONTENT -->

@endsection
