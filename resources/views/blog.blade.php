@extends('layouts.main') @section('css')
<link rel="stylesheet" href="{{ asset('assets/css/page.css') }}" />
@endsection @section('content')

<?php

setlocale (LC_TIME, 'fr_FR.utf8','fra');



?>
<!-- PAGE CONTENT -->
<div id="page-content">
    <div id="page-header">
        <div
            class="ken-burns"
            style="background-image:url({{
                asset('assets/images/slider_article.jpg')
            }});"
        ></div>

        <div class="overlay"></div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <i class="decode-icon- wow tada"></i>
                <h2>{{$article->title}}</h2>
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
                                src="{{config('app.site_url').'storage/'.$article->picture}}"
                                alt=""
                        /></a>
                    </div>
                    <!-- blog-article-thumbnail -->

                    <h4 class="blog-article-title">
                        <a href="#">{{$article->title}}</a>
                    </h4>
                    <hr />

                    <ul class="blog-article-details">
                        <li class="date">
                            <i class="decode-icon-time"></i>
                            <a href="#">{{strftime("%d %B %y",strtotime($article->created_at))}}</a>
                        </li>
                        <li class="author">
                            <i class="decode-icon-edit"></i> by
                            <a href="#">{{$article->author}}</a>
                        </li>
                        {{-- <lI class="category"
                            ><i class="decode-icon-layers"></i> in
                            <a href="#">Design</a></lI
                        >
                        <li class="comments">
                            <i class="decode-icon-chat"></i>
                            <a href="#">3 Comments</a>
                        </li> --}}
                    </ul>
                    <!-- blog-article-details -->

                    <div class="blog-article-content">
                            {!! $article->description !!}
                    </div>
                    <!-- blog-article-content -->
                </div>
                <!-- blog-article -->

                <div class="blog-article-author">
                    <img
                        src="{{
                            asset('assets/images/blog/blog-post/avatar-1.jpg')
                        }}"
                        alt=""
                    />

                    <div class="blog-article-author-details">
                        <h6>{{ $article->author }} <small>Author</small></h6>

                        {{-- <p>
                            Amet, consectetur adipiscing elit. Sed neque odio,
                            pulvinar ut urna ut, vene natis venenatis nisi.
                            Nulla tempus feu giat varius.
                        </p> --}}
                    </div>
                    <!-- blog-article-author-details -->
                </div>
                <!-- blog-article-author -->
            </div>
            <!-- col -->
        </div>
        <!-- row -->
    </div>
    <!-- container -->
</div>
<!-- PAGE CONTENT -->

@endsection
