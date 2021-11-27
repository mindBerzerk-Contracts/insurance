@extends("layouts.master")

@section('title')
    About
@endsection

@section('content')

    <div class="page-content about-page">
        <!-- HEADING PAGE-->
        <div class="heading-page heading-normal heading-project">
            <div class="container">
                <ul class="au-breadcrumb">
                    <li class="au-breadcrumb-item">
                        <i class="fa fa-home"></i>
                        <a href="/home">Home</a>
                    </li>
                    <li class="au-breadcrumb-item active">
                        <i class="fas fa-hotel"></i>
                        <a href="/home">About</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- END HEADING PAGE-->
        <!-- SECTION ABOUT, STYLE 2-->
        <section class="about about-layout-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-md-push-6">
                        <div class="image">
                            <img alt="Our Team" src="{{asset('img/call-to-action/biglogo.png')}}"/>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-md-pull-6">
                        <div class="main-post">
                            <h3 class="heading">SKELTA</h3>
                            <p class="content">
                                We are best known for offering independent and impartial comparison using cutting edge
                                technology backed by powerful AI to provide the best deal on retail insurance products
                                which include <strong>Motor vehicles Insurance, Health insurance, Home insurance,
                                    personal accident, travel insurance, pension </strong>and many more. We are NOT an
                                insurance intermediary besides we do a whole lot more.</p>
                            <p class="content">
                                We do not provide recommendations but we provide clear information so that you can make
                                an informed choice of a product that meets your needs.
                            </p>
                            <p class="content">
                                The website <a href="skelta.co.ke" target="_blank" rel="noopener noreferrer">Skelta</a>
                                is free to use and we do not charge commission for the same.
                            </p>
                            <p class="content">
                                We work with most of Kenya’s insurance companies, our searches include the specific
                                products and are ranked as per the index we have agreed internally
                                Guarding and protecting your details is paramount and is always a top priority. We’re
                                just as passionate about safeguarding your sensitive information as we are about
                                creating a convenient experience for all our users.
                            </p>
                            <p class="content">
                                One can compare results from a wide selection of insurance providers, you type the
                                details of the product you would like to compare. We then display the results, ordered
                                by lowest price first and also displaying a summary of the key policy features
                                information as we are about creating a convenient experience for all our users, if you
                                are interested you will enter some of your details into our site, then we will pass
                                these details onto our partners so they can calculate results, the provider you select
                                will call you back to provide more information or to arrange your policy.
                            </p>

                            <div class="action-group">
                                <a class="au-btn au-btn-orange au-btn-md" href="compare-insurance">
                                    Get a quote
                                </a>
                                <div class="sub-link">
                                    <span>or</span>
                                    <a class="au-btn au-btn-blue au-btn-md" href="underconstruction">Find an agent</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION ABOUT, STYLE 2-->
        <!-- CONTENT BOX, STYLE 3-->
        <section class="content-box content-box-layout style-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="content-box-item style-3 match-item">
                            <div class="icon-present">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <div class="title">
                                <h4>Our Agents Are Trusted Advisors</h4>
                            </div>
                            <div class="subtitle">
                                <p>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="content-box-item style-3 match-item">
                            <div class="icon-present">
                                <i class="fa fa-diamond"></i>
                            </div>
                            <div class="title">
                                <h4>Excellent Claims Experiences</h4>
                            </div>
                            <div class="subtitle">
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="content-box-item style-3 match-item">
                            <div class="icon-present">
                                <i class="fa fa-comment"></i>
                            </div>
                            <div class="title">
                                <h4>Positive Customer Testimonials</h4>
                            </div>
                            <div class="subtitle">
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END CONTENT BOX, STYLE 3-->
        <!-- CALL TO ACTION, STYLE 2-->
        <section class="call-to-action call-to-action-layout style-2 bg-blue">
            <div class="container">
                <div class="call-to-action-block">
                    <h4 class="call-to-action-content">Find Information And Get Free Insurance Quotes.</h4>
                    <button class="au-btn au-btn-orange au-btn-md" onclick="window.location.href='compare-insurance';">
                        Get a quote
                    </button>
                </div>
            </div>
        </section>
        <!-- END CALL TO ACTION, STYLE 2-->
    </div>

@endsection
