@extends('layouts.main') @section('css')
<link rel="stylesheet" href="{{ asset('assets/css/page.css') }}" />
@endsection @section('content')
<!-- PAGE CONTENT -->
<div id="page-content">
    <div id="page-header">
        <div
            class="ken-burns"
            style="background-image:url(assets/images/slider_article.jpg); background-position: center;"
        ></div>

        <div class="overlay"></div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <i class="decode-icon- wow tada"></i>
                    <h2>INCRIPSTION</h2>
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

                    <form class="login-form" name="login" novalidate method="post">
                        <fieldset>

                                <p>
                                        <input class="col-12" id="email" type="text" placeholder="Full Name">
                                    </p>

                            <p>
                                <input class="col-12" id="email" type="email" placeholder="E-mail address">
                            </p>

                            <p>
                                <input class="col-12" id="password" type="password" placeholder="Password">
                            </p>

                            <p>
                                    <input class="col-12" id="password" type="password" placeholder="Confirm Password">
                                </p>


                            <button type="submit" class="btn btn-default btn-outline waves waves-dark">Signu Up <i class="decode-icon-cursor"></i></button>

                        </fieldset>
                    </form>

                    <a href="/connexion">Already have an account? </a> <br class="d-block d-sm-none">


                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->


</div>
<!-- PAGE CONTENT -->

@endsection
