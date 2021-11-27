@extends("layouts.master")

@section("title")
   Medical Insurance
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
                    <li class="au-breadcrumb-item">
                        <i class="fas fa-university"></i>
                        <a href="/compare-insurance">Compare Insurance</a>
                    </li>
                    <li class="au-breadcrumb-item active">
                        <i class="fa fa-heartbeat"></i>
                        <a href="/compare-motor-commercial">Medical Insurance</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- END HEADING PAGE-->

        <!-- PRODUCT, STYLE 4-->
        <section class="product product-layout style-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="product-item style-2 match-item">
                            <div class="icon">
                                <i class="fas fa-walking"></i>
                            </div>
                            <div class="title">
                                <a href="/underconstruction">Seniors</a>
                            </div>
                            <div class="content">
                                <p></p>
                            </div>
                            <div class="view-more">
                                <button class="btn btn-warning"
                                        onclick="window.location.href='underconstruction';"
                                        type="button">Get Quotation
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="product-item style-2 match-item">
                            <div class="icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="title">
                                <a href="/underconstruction">Normal</a>
                            </div>
                            <div class="content">
                                <p></p>
                            </div>
                            <div class="view-more">
                                <button class="btn btn-warning"
                                        onclick="window.location.href='underconstruction';"
                                        type="button">Get Quotation
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="product-item style-2 match-item">
                            <div class="icon">
                                <i class="fas fa-baby"></i>
                            </div>
                            <div class="title">
                                <a href="/underconstruction">Children</a>
                            </div>
                            <div class="content">
                                <p></p>
                            </div>
                            <div class="view-more">
                                <button class="btn btn-warning"
                                        onclick="window.location.href='underconstruction';"
                                        type="button">Get Quotation
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END PRODUCT, STYLE 4-->

    </div>

@endsection
