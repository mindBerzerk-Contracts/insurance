@extends("layouts.master")

@section("title")
    Home
@endsection

@section("content")
    <div class="page-content home-page-1">

        <!-- END OF SLIDER WRAPPER-->
        <div id="CarouselSlider" class="carousel carousel-dark slide" data-bs-ride="carousel" data-bs-interval="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#CarouselSlider" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#CarouselSlider" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#CarouselSlider" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#CarouselSlider" data-bs-slide-to="3"
                        aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('img/slider/compare-1900.png')}}" class="d-block w-100" alt="Carousel Two">
                    <div class="carousel-caption text-white d-none d-md-block col-6">
                        <h3 class="fs-4 fw-bold">Compare Insurance</h3>
                        <p>Compare Insurance Quotes and get the best deal from over 50 Insurance Companies.</p>
                        <a href="compare-insurance" class="btn btn-primary mt-3">Start Now</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('img/slider/invest-1900.png')}}" class="d-block w-100" alt="Carousel One">
                    <div class="carousel-caption text-white d-none d-md-block col-6">
                        <h3 class="fs-4 fw-bold">Why We Invest</h3>
                        <p>We have brought together top insuranceExperts to
                            <br/>provide you the best free advise on insurance and finance matters.</p>
                        <a href="#" class="btn btn-warning mt-3">Learn More</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('img/slider/questions-1900.png')}}" class="d-block w-100" alt="Carousel Three">
                    <div class="carousel-caption text-white d-none d-md-block col-6">
                        <h3 class="fs-5 fw-bold">Got an Insurance Question?</h3>
                        <p> Search our Database of our 1000 answered Insurance Questions,
                            <br/> or better still ask your question on our platform and
                            <br/> one of our export will sorely answer you within 24 hours
                            <br/></p>
                        <a href="#" class="btn btn-success mt-3">Search Now</a>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#CarouselSlider" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#CarouselSlider" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


        <!-- PARTNER-->
        <div class="partner partner-layout style-1">
            <div class="container">
                <div class="heading">
                    <h3 class="heading-section">Skelta Trusted Partners</h3>
                </div>

                <div id="CarouselSliderPartner" class="carousel carousel-dark slide" data-bs-ride="carousel"
                     data-bs-interval="true">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col"><img src="{{asset('img/partner/1.png') }}" alt="1 slide"></div>
                                <div class="col"><img src="{{asset('img/partner/2.png') }}" alt="2 slide"></div>
                                <div class="col"><img src="{{asset('img/partner/13.png') }}" alt="3 slide"></div>
                                <div class="col"><img src="{{asset('img/partner/4.png') }}" alt="4 slide"></div>
                                <div class="col"><img src="{{asset('img/partner/5.png') }}" alt="5 slide"></div>
                                <div class="col"><img src="{{asset('img/partner/6.png') }}" alt="6 slide"></div>
                            </div>
                            <div class="row">
                                <div class="col"><img src="{{asset('img/partner/7.png') }}" alt="4 slide"></div>
                                <div class="col"><img src="{{asset('img/partner/8.png') }}" alt="5 slide"></div>
                                <div class="col"><img src="{{asset('img/partner/9.png') }}" alt="6 slide"></div>
                                <div class="col"><img src="{{asset('img/partner/10.png') }}" alt="4 slide"></div>
                                <div class="col"><img src="{{asset('img/partner/11.png') }}" alt="5 slide"></div>
                                <div class="col"><img src="{{asset('img/partner/12.png') }}" alt="6 slide"></div>
                            </div>
                        </div>

                    </div>


                    <button class="carousel-control-prev" type="button" data-bs-target="#CarouselSliderPartner"
                            data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true" hidden></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#CarouselSliderPartner"
                            data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true" hidden></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <!-- END PARTNER-->

        <!-- TESTINMONIAL, STYLE 1-->
        <section class="testinmonials testinmonials-layout style-1">
            <div class="container">
                <div class="heading">
                    <h3 class="heading-section">What Our Customers Say</h3>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <!-- testinmonials item-->
                        <div class="testinmonial-item style-1 match-item">
                            <div class="content">
                                <p>
                                    Morbi auctor vel mauris facilisis lacinia. Aenean suscipit
                                    lorem leo, et hendrerit odio fermentum et. Donec ac dolor
                                    eros. Mauris arcu nunc, iaculis sit amet lacus iaculis,
                                    faucibus faucibus nunc. Vestibulum sit amet lacinia massa
                                </p>
                            </div>
                            <div class="personal">
                                <div class="avatar">
                                    <img alt="Cheryl Cruz" src="{{asset('img/avatar/avatar-1.jpg') }}"/>
                                </div>
                                <div class="info">
                                    <div class="name">
                                        <span>Cheryl Cruz</span>
                                    </div>
                                    <div class="title-job">
                                        <span>Car Owner</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <!-- testinmonials item-->
                        <div class="testinmonial-item style-1 match-item">
                            <div class="content">
                                <p>
                                    Vestibulum ultricies cursus feugiat. Vestibulum scelerisque
                                    posuere neque. Phasellus tortor lacus, tincidunt nec varius
                                    ut, tempor eget massa. Aenean non lorem ex. Phasellus
                                    dapibus eu justo dapibus commodo.
                                </p>
                            </div>
                            <div class="personal">
                                <div class="avatar">
                                    <img alt="Linda Campbell" src="{{asset('img/avatar/avatar-2.jpg') }}"/>
                                </div>
                                <div class="info">
                                    <div class="name">
                                        <span>Linda Campbell</span>
                                    </div>
                                    <div class="title-job">
                                        <span>Car Owner</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <!-- testinmonials item-->
                        <div class="testinmonial-item style-1 match-item">
                            <div class="content">
                                <p>
                                    Etiam et purus in dui dignissim dictum quis efficitur
                                    libero. Sed fringilla, augue vel sollicitudin bibendum,
                                    ligula elit rhoncus lorem, a egestas diam augue sed enim. In
                                    eget luctus ante. Mauris ut cursus nunc, vitae hendrerit
                                </p>
                            </div>
                            <div class="personal">
                                <div class="avatar">
                                    <img alt="John Walker" src="{{asset('img/avatar/avatar-3.jpg') }}"/>
                                </div>
                                <div class="info">
                                    <div class="name">
                                        <span>John Walker</span>
                                    </div>
                                    <div class="title-job">
                                        <span>Home Owner</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END TESTINMONIAL, STYLE 1-->


    </div>

@endsection

