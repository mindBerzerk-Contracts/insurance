@extends("layouts.master")

@section("title")
    Compare Insurance
@endsection

@section("content")

    <div class="page-content home-page-2">

        <!-- HEADING PAGE-->
        <div class="heading-page heading-normal heading-project">
            <div class="container">
                <ul class="au-breadcrumb">
                    <li class="au-breadcrumb-item">
                        <i class="fa fa-home"></i>
                        <a href="/home">Home</a>
                    </li>
                    <li class="au-breadcrumb-item active">
                        <i class="fas fa-university"></i>
                        <a href="/compare-insurance">Compare Insurance</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- END HEADING PAGE-->

        <!-- PRODUCT, STYLE 4-->
        <section class="product product-layout style-3">
            <div class="container">
                {{--<div class="heading">
                    <h3 class="heading-section">Compare Insurance</h3>
                </div>
                <div class="sub-heading">
                    <span>We have brought together top insurance Experts to provide you the best
                        <br/> free advise on insurance and finance matters.</span>
                </div>--}}

                <div class="row justify-content-between">
                    <div class="col-md-4 col-sm-6">
                        <div class="product-item style-2 match-item">
                            <div class="icon">
                                <i class="fa fa-car"></i>
                            </div>
                            <div class="title">
                                <a href="{{ url('/motor-private-quotation') }}">Motor Private Insurance</a>
                            </div>
                            <div class="content">
                                <p></p>
                            </div>
                            <div class="view-more">
                                <button class="btn btn-warning"
                                        onclick="window.location.href='/motor-private-quotation';"
                                        type="button">Get a Quote
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="product-item style-2 match-item">
                            <div class="icon">
                                <i class="fa fa-bus"></i>
                            </div>
                            <div class="title">
                                <a href="{{ url('/compare-motor-commercial') }}">Motor Commercial Insurance</a>
                            </div>
                            <div class="content">
                                <p></p>
                            </div>
                            <div class="view-more">
                                <button class="btn btn-warning"
                                        onclick="window.location.href='/motor-commercial';"
                                        type="button">Get a Quote
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="product-item style-2 match-item">
                            <div class="icon">
                                <i class="fa fa-heartbeat"></i>
                            </div>
                            <div class="title">
                                <a href="{{ url('/underconstruction') }}">Medical Insurance</a>
                            </div>
                            <div class="content">
                                <p></p>
                            </div>
                            <div class="view-more">
                                <button class="btn btn-warning"
                                        onclick="window.location.href='/medical-insurance';"
                                        type="button">Get a Quote
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="product-item style-2 match-item">
                            <div class="icon">
                                <i class="fa fa-ambulance"></i>
                            </div>
                            <div class="title">
                                <a href="{{ url('/underconstruction') }}">Personal Accident Insurance</a>
                            </div>
                            <div class="content">
                                <p></p>
                            </div>
                            <div class="view-more">
                                <button class="btn btn-warning"
                                        onclick="window.location.href='/underconstruction';"
                                        type="button">Get a Quote
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="product-item style-2 match-item">
                            <div class="icon">
                                <i class="fa fa-plane"></i>
                            </div>
                            <div class="title">
                                <a href="{{ url('/underconstruction') }}">Travel Insurance</a>
                            </div>
                            <div class="content">
                                <p></p>
                            </div>
                            <div class="view-more">
                                <button class="btn btn-warning"
                                        onclick="window.location.href='/underconstruction';"
                                        type="button">Get a Quote
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="product-item style-2 match-item">
                            <div class="icon">
                                <i class="fas fa-home"></i>
                            </div>
                            <div class="title">
                                <a href="{{ url('/underconstruction') }}">Home Insurance</a>
                            </div>
                            <div class="content">
                                <p></p>
                            </div>
                            <div class="view-more">
                                <button class="btn btn-warning"
                                        onclick="window.location.href='/underconstruction';"
                                        type="button">Get a Quote
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="product-item style-2 match-item">
                            <div class="icon">
                                <i class="fas fa-hand-holding-heart"></i>
                            </div>
                            <div class="title">
                                <a href="{{ url('/underconstruction') }}"> life Insurance</a>
                            </div>
                            <div class="content">
                                <p></p>
                            </div>
                            <div class="view-more">
                                <button class="btn btn-warning"
                                        onclick="window.location.href='/underconstruction';"
                                        type="button">Get a Quote
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- END PRODUCT, STYLE 4-->



@endsection
