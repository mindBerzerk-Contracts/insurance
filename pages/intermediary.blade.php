@extends("layouts.master")

@section("title")
    Insurance Details
@endsection

@section("content")
    <!-- HEADING PAGE-->
    <div class="heading-page heading-normal heading-project">
        <div class="container">
            <ul class="au-breadcrumb">
                <li class="au-breadcrumb-item">
                    <i class="fa fa-home"></i>
                    <a href="/home">Home</a>
                </li>
                <li class="au-breadcrumb-item active">
                    <i class="fas fa-globe-africa"></i>
                    <a href="intermediary">Intermediary World</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- END HEADING PAGE-->
    <!-- END HEADING PAGE-->
    <div class="page-content services-detail-1">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- SLIDER, STYLE 1-->
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{asset('img/slider/compare-1900.png')}}" class="d-block w-100"
                                     alt="Carousel Two">
                                <div class="carousel-caption text-white d-none d-md-block col-6">
                                    <h3 class="fs-4 fw-bold">Join Us at the Intermediary World</h3>
                                    <p> Skelta makes finding any information about insurance easy and fun</p>
                                    <a href="underconstruction" class="btn btn-success mt-3">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END SLIDER, STYLE 1-->

                    <!-- POST SERVICES DERAIL 1-->
                    <section class="post-services post-services-detail-1">
                        <div class="post-paragraph p1">
                            <div class="post-content">
                                <p>
                                    Skelta is one of Kenya’s leading insurance comparison websites, has an exciting
                                    opportunity for your company to grow your business. Our secure Intermediary portal
                                    helps you manage your product portfolio and client accounts, obtain customized
                                    quotes and view recent activity, while we keep you informed on the recent industry
                                    activities.
                                </p>
                            </div>
                        </div>

                        <div class="post-paragraph p2">
                            <div class="post-heading">
                                <h3>Benefits as an Intermediary or Agent</h3>
                            </div>
                        </div>
                        <div class="post-table">
                            <table class="table table-bordered table-responsive">
                                <tbody>
                                <tr>
                                    <td class="fw-bold">Benefits</td>
                                </tr>
                                <tr>
                                    <td>A personalized dashboard and an overview of your products</td>
                                </tr>
                                <tr>
                                    <td>Get comparison quotes for your customers complete with your logo</td>
                                </tr>
                                <tr>
                                    <td>Get details of benefits and negotiated rates as per your desired products</td>
                                </tr>
                                <tr>
                                    <td>Request a personalized website with a powerful SEO</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="post-with-image">
                                    <div class="post-paragraph">
                                        <div class="post-heading">
                                            <h3>No joining cost</h3>
                                        </div>
                                        <div class="post-content">
                                            <p>
                                                There is no cost to have your quote on our website, you can always share
                                                the quotations with the client on email or any social media, and it is
                                                FREE.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="post-with-image">
                                    <div class="post-paragraph">
                                        <div class="post-heading">
                                            <h3>Great exposure</h3>
                                        </div>
                                        <div class="post-content">
                                            <p>
                                                Your brand will benefit from the awareness of being listed in our quote
                                                results and enjoy the exposure we create with our extensive advertising
                                                campaigns. Boost your brand image, awareness, recognition and
                                                reputation.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="post-with-image">
                                    <div class="post-paragraph">
                                        <div class="post-heading">
                                            <h3>We are growing fast</h3>
                                        </div>
                                        <div class="post-content">
                                            <p>
                                                <a target="_blank" rel="noopener noreferrer" href="skelta.co.ke">Skelta
                                                    site</a> is growing fast in popularity in Kenya and across Africa.
                                                As more customers shop around for a great deal and as Internet usage
                                                increases in Africa, so will your business grow!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="post-with-image">
                                    <div class="post-paragraph">
                                        <div class="post-heading">
                                            <h3>Impartial and secure</h3>
                                        </div>
                                        <div class="post-content">
                                            <p>
                                                Skelta limited operates as an independent brand. The quotation results
                                                that are shown are in not influenced by any other factors other than the
                                                order of the best-quoted price at any particular moment. Your data is
                                                handled securely using the best Internet security and safe data handling
                                                measures.
                                                Quick and easy to get you up and running, let partner now
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </section>
                    <!-- END POST SERVICES DERAIL 1-->
                </div>

            </div>
        </div>
    </div>

@endsection
