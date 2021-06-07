@extends('layouts.main') @section('css')
<link rel="stylesheet" href="{{ asset('assets/css/page.css') }}" />
@endsection @section('content')
<!-- PAGE CONTENT -->
<div id="page-content">
    <div id="page-header">
        <div
            class="ken-burns"
            style="background-image:url(assets/images/FullSommesNous13.jpg); background-position: center;"
        ></div>

        <div class="overlay"></div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <i class="decode-icon- wow tada"></i>
                    <h2>CONNEXION</h2>
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

                    <form class="login-form" name="login" novalidate method="post" action="#">
                        <fieldset>

                            <p>
                                <input class="col-12" id="email" type="email" placeholder="E-mail address">
                            </p>

                            <p>
                                <input class="col-12" id="password" type="password" placeholder="Password">
                            </p>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="">
                                    Remember me
                                    <span></span>
                                </label>
                            </div>

                            <button type="submit" class="btn btn-default btn-outline waves waves-dark">Log in <i class="decode-icon-cursor"></i></button>

                        </fieldset>
                    </form>

                    <a href="/inscription">Don't have an account?</a> <br class="d-block d-sm-none">
                    <a href="#">Forgotten password?</a>

                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->


</div>
<!-- PAGE CONTENT -->

@endsection
