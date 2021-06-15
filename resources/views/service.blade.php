@extends('layouts.main') @section('css')
<link rel="stylesheet" href="{{ asset('assets/css/page.css') }}" />
@endsection @section('content')

<!-- PAGE CONTENT -->
<div id="page-content">
    <div id="page-header">
        <div
            class="ken-burns"
            style="background-image:url('{{
                asset('assets/images/header articles.jpg')
            }}'); background-position: center;"
        ></div>

        <div class="overlay"></div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <i class="decode-icon- wow tada"></i>
                    <h2>Les Publications</h2>
                </div>
                <!-- col -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- page-header -->

    <section
        class="full-section dark-section"
        style="margin-bottom: 0px;background-color: white;"
    >
        <div class="full-section-container">
            <img
                class="overlay_image_large"
                src="{{ asset('assets/images/new-bg.png') }}"
            />

            <div class="col-md-12 mb-3">
                <!-- Possible ligne vercticale -->
                <h4 class="f-800" style="padding-left: 65px;">
                    Retrouvez tous<br />nos articles en ligne
                </h4>
            </div>

            <div class="container">
                <div class="row">
                        @foreach ($articles as $item)

                        <div class="col-lg-4 p-30">

                                <div class="service-box style-7 large wow zoomIn service-box-bg" style="background: url({{config('app.site_url').'storage/'.$item->picture}}) no-repeat;">

                                    <div class="service-box-layer">

                                <!-- <i class="decode-icon-ranking"></i> -->

                                <div class="service-box-content">

                                <h5 style="margin-bottom: 0px;" class="text-justify"><a href="{{route('publications.show',['id' => $item->slug])}}">{{$item->title}}</a></h5>
                                    <hr />

                                    <p>  {!! str_limit(strip_tags($item->description), $limit = 150, $end = '...') !!} </p>

                                </div><!-- service-box-content -->

                                </div>


                            </div><!-- service-box -->

                        </div><!-- col -->

                        @endforeach
                </div>
                <!-- row -->
            </div>
            <!-- services-container -->
        </div>
        <!-- full-section-container -->
    </section>
    <!-- full-section -->
    <!-- container -->

    <div class="container">
            <div class="row">
                <div class="col-md-12">

                        {{ $articles->links() }}


                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->
</div>
<!-- PAGE CONTENT -->

@endsection
