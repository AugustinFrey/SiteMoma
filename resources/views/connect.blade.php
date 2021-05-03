@extends('layouts.main') @section('css')
<link rel="stylesheet" href="{{ asset('assets/css/page.css') }}" />
@endsection @section('content')
<!-- PAGE CONTENT -->
<div id="page-content">
    <div id="page-header">
        <div
            class="ken-burns"
            style="background-image:url('{{
                asset('assets/images/slider_article.jpg')
            }}'); background-position: center;"
        ></div>

        <div class="overlay"></div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <i class="decode-icon- wow tada"></i>
                    <h2>Connect</h2>
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
            <div class="col-lg-10 col-xl-8 ml-auto mr-auto">
                <div class="blog-article">
                    <div class="blog-article-thumbnail">
                        <a href="#"
                            ><img
                                src="{{
                                    asset('assets/images/blog/image-7.jpg')
                                }}"
                                alt=""
                        /></a>
                    </div>
                    <!-- blog-article-thumbnail -->

                    <h4 class="blog-article-title">
                        <a href="#">Design Trends for 2017 - Main Guidelines</a>
                    </h4>
                    <div class="tilde" style="margin-left: -8px;">
                        ˜˜˜˜˜˜˜˜˜˜
                    </div>
                </div>
                <!-- blog-article -->

                <h3>
                    Pour lire la suite de l’article,
                    <strong>veillez vous connecter.</strong>
                </h3>

                <div
                    class="col-lg-10 col-md-11 ml-auto mr-auto text-center mt-5"
                >
                    <a
                        class="btn btn-default btn-outline waves waves-dark"
                        href="#"
                        >INCRIPSTION</a
                    >
                </div>
                <div class="col-lg-10 col-md-11 ml-auto mr-auto text-center">
                    <a
                        class="btn btn-default btn-outline waves waves-dark"
                        href="#"
                        >CONNEXION</a
                    >
                </div>
            </div>
            <!-- col -->
        </div>
        <!-- row -->
    </div>
    <!-- container -->
</div>
<!-- PAGE CONTENT -->

@endsection
