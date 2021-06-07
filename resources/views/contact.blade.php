@extends('layouts.main') @section('css')
<link rel="stylesheet" href="{{ asset('assets/css/page.css') }}" />
@endsection @section('content')
<!-- PAGE CONTENT -->
<div id="page-content">
    <div id="page-header">
        <div
            class="ken-burns"
            style="background-image:url(assets/images/header-contact.jpg); background-position: center;"
        ></div>

        <div class="overlay"></div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <i class="decode-icon- wow tada"></i>
                    <h2>Nous contacter</h2>
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
                <h6 style="font-weight: 600;">Nous contacter</h6>

                @if (\Session::get('success'))
                                            <div class="alert alert-success" role="alert">
                                                {{ \Session::get('success') }}
                                            </div>
                                            @endif

                <form
                    id="contact-form"
                    method="post"
            action="{{route('contact.store')}}"
                >
                @csrf
                    <fieldset>
                        <div id="alert-area"></div>

                        <p>
                            <input
                                class="col-12"
                                id="contact_name"
                                type="text"
                                name="contact_name"
                                placeholder=""
                                required
                            />
                            <span></span>
                            <label for="name">Nom</label>
                        </p>

                        <p>
                            <input
                                class="col-12"
                                id="contact_email"
                                type="text"
                                name="contact_email"
                                placeholder=""
                                required
                            />
                            <span></span>
                            <label for="email">E-mail</label>
                        </p>

                        <p>
                            <input
                                class="col-12"
                                id="contact_subject"
                                type="text"
                                name="contact_subject"
                                placeholder=""
                                required
                            />
                            <span></span>
                            <label for="subject">Sujet</label>
                        </p>

                        <p>
                            <textarea
                                class="col-12"
                                id="contact_message"
                                name="contact_message"
                                rows="3"
                                cols="25"
                                placeholder=""
                                required
                            ></textarea>
                            <span></span>
                            <label for="message">Message</label>
                        </p>

                        <button
                            class="btn btn-default btn-outline waves waves-dark"
                            id="submit"
                            type="submit"
                            name="submit"
                            value=""
                        >
                            Envoyer message <i class="decode-icon-cursor"></i>
                        </button>
                    </fieldset>
                </form>
            </div>
            <!-- col -->
            <div class="col-md-4">
                <h6 style="font-weight: 600;">Contactez nous pour plus d’informations</h6>
                <hr />

                <br />

                <div class="widget widget-contact ml-lg-5">
                    <ul>
                        <li class="address">
                            <i class="decode-icon-placeholder2"></i>
                            Rue Vendémiaire, CS 19519, 
                            <br class="d-block d-md-none d-lg-block" />
                            34960 Montpellier,
                            <br class="d-block d-md-none d-lg-block" />
                            Cedex, France
                        </li>
                        <li class="email">
                            <i class="decode-icon-multimedia"></i>
                            <a href="contact@chaire-innoveres.com"
                                >contact@chaire-innoveres.com</a
                            >
                        </li>
                    </ul>
                </div>
                <!-- widget-contact -->
            </div>
            <!-- col -->
        </div>
        <!-- row -->
    </div>
    <!-- container -->
</div>
<!-- PAGE CONTENT -->

@endsection
