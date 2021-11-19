@extends("layouts.master")

@section("title")
    Compare Medical
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
                        <a href="/compare-insurance">Compare Insurance</a>
                    </li>
                    <li class="au-breadcrumb-item active">
                        <a href="/compare-motor-commercial">Medical Insurance</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- END HEADING PAGE-->

        <!-- PRODUCT, STYLE 4-->
        <section class="product product-layout style-3">
            <div class="container">
                <div class="heading">
                    <h3 class="heading-section">Medical Insurance</h3>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="product-item style-2 match-item">
                            <div class="icon">
                                <i class="fas fa-hand-holding-heart"></i>
                            </div>
                            <div class="title">
                                <a href="/underconstruction">Seniors</a>
                            </div>
                            <div class="content">
                                <p>Insurance fraud puts an extra ksh 70000 on the price of every annual car insurance
                                    premium.</p>
                            </div>
                            <div class="view-more">
                                <button class="btn btn-outline-warning"
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
                                <p>Insurance fraud puts an extra ksh 70000 on the price of every annual car insurance
                                    premium.</p>
                            </div>
                            <div class="view-more">
                                <button class="btn btn-outline-warning"
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
                                <p>If you have a partner and children, then the two of you should think about life
                                    insurance</p>
                            </div>
                            <div class="view-more">
                                <button class="btn btn-outline-warning"
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
