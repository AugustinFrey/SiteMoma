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
                    <h2>Contact us</h2>
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
                <h6 style="font-weight: 600;">Get in touch</h6>

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
                            <label for="name">Name</label>
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
                            <label for="subject">Subject</label>
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
                            Send message <i class="decode-icon-cursor"></i>
                        </button>
                    </fieldset>
                </form>
            </div>
            <!-- col -->
            <div class="col-md-4">
                <h6 style="font-weight: 600;">Contactez nous pour plus d’informations</h6>
                <div class="tilde" style="margin-left: -8px;">˜˜˜˜˜</div>

                <p>
                    Etiam nec odio vestibulum est mattis effic iturut magna.
                    Pellentesque sit amet tellus blandit. Etiam nec odio
                    vestibul nec odio vestibulum est mattis effic iturut magna.
                    Etiam nec odio vestibulum est mattis effic iturut magna.
                </p>

                <br />

                <div class="widget widget-contact ml-lg-5">
                    <ul>
                        <li class="address">
                            <i class="decode-icon-placeholder2"></i>
                            4124 Barnes Street, Sanford,
                            <br class="d-block d-md-none d-lg-block" />
                            FL 32771
                        </li>
                        <li class="phone">
                            <i class="decode-icon-phone-call"></i>
                            203-808-8613
                        </li>
                        <li class="email">
                            <i class="decode-icon-multimedia"></i>
                            <a href="mailto:office@milothemes.com"
                                >office@milothemes.com</a
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
