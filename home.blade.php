@extends("layouts.master")

@section("title")
    Home
@endsection

@section("content")
    <div class="page-content home-page-1">

        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="{{asset('img/slider/compare-1900.png')}}" class="d-block w-100" alt="caption">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="text-white bold">Compare Insurance</h5>
                        <p class="text-white"> Compare Insurance Quotes and get the best deal <br/> from over 50
                            Insurance Companies</p>
                        <button class="bt btn-warning btn-lg" onclick="window.location.href='compare-insurance';">
                            Compare
                        </button>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="{{asset('img/slider/invest-1900.png')}}" class="d-block w-100" alt="caption">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="text-white bold">Why We Invest</h5>
                        <p class="text-white"> We have brought together top insuranceExperts to
                            <br/>provide you the best free advise on insurance and finance matters</p>
                        <button class="bt btn-primary btn-lg" onclick="window.location.href='underconstruction';">
                            Invest
                        </button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('img/slider/questions-1900.png')}}" class="d-block w-100" alt="caption">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="text-white bold">Got a Insurance Question</h5>
                        <p class="text-white">Search our Database of our 1000 answered Insurance Questions,
                            <br/> or better still ask your question on our platform and
                            <br/> one of our export will sorely answer you within 24 hours</p>
                        <button class="bt btn-success btn-lg" onclick="window.location.href='underconstruction';">Q&A
                        </button>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- END OF SLIDER WRAPPER-->


        <!-- PRODUCT, STYLE 1-->
       {{-- <section class="product product-layout style-1">
            <div class="container">
                <div class="heading">
                    <h3 class="heading-section">Our Products</h3>
                </div>
                <div class="sub-heading">
                    <span>We have brought together top insurance Experts
                        <br/>to provide you the best free advise on insurance and finance matters.</span>
                </div>

                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="product-item style-1 match-item">
                            <a class="image" href="/insurance-details">
                                <img
                                    alt="Car Insurance"
                                    class="img-fluid"
                                    src="{{asset('img/product/car.png') }}"
                                />
                            </a>
                            <div class="title">
                                <a href="/insurance-details">Car Insurance</a>
                            </div>
                            <div class="content">
                                <p>
                                    Insurance fraud puts an extra ks7000 on the price of every
                                    annual car insurance premium.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="product-item style-1 match-item">
                            <a class="image" href="/insurance-details">
                                <img
                                    alt="Life Insurance"
                                    class="img-fluid"
                                    src="{{asset('img/product/life.png') }}"
                                />
                            </a>
                            <div class="title">
                                <a href="/insurance-details">Life Insurance</a>
                            </div>
                            <div class="content">
                                <p>
                                    If you have a partner and children, then the two of you
                                    should think about life insurance
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="product-item style-1 match-item">
                            <a class="image" href="/insurance-details">
                                <img
                                    alt="Home Insurance"
                                    class="img-fluid"
                                    src="{{asset('img/product/home.png') }}"
                                />
                            </a>
                            <div class="title">
                                <a href="/insurance-details">Home Insurance</a>
                            </div>
                            <div class="content">
                                <p>
                                    We'll rebuild or repair your home if it's damaged or
                                    destroyed.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="product-item style-1 match-item">
                            <a class="image" href="/insurance-details">
                                <img
                                    alt="Travel Insurance"
                                    class="img-fluid"
                                    src="{{asset('img/product/travel.png') }}"
                                />
                            </a>
                            <div class="title">
                                <a href="/insurance-details">Travel Insurance</a>
                            </div>
                            <div class="content">
                                <p>
                                    We can help you find the best plan for your trip and your
                                    budget.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="product-item style-1 match-item">
                            <a class="image" href="/insurance-details">
                                <img
                                    alt="Business Insurance"
                                    class="img-fluid"
                                    src="{{asset('img/product/business.png') }}"
                                />
                            </a>
                            <div class="title">
                                <a href="/insurance-details">Business Insurance</a>
                            </div>
                            <div class="content">
                                <p>
                                    In truth, there are certain forms of insurance that are an
                                    absolute requirement for all businesses
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="product-item style-1 match-item">
                            <a class="image" href="/insurance-details">
                                <img
                                    alt="Landlord Insurance"
                                    class="img-fluid"
                                    src="{{asset('img/product/landlord.png') }}"
                                />
                            </a>
                            <div class="title">
                                <a href="/insurance-details">Landlord Insurance</a>
                            </div>
                            <div class="content">
                                <p>
                                    Our rental property insurance protects your property from
                                    damages
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>--}}
    <!-- END PRODUCT, STYLE 1-->

        <!-- PARTNER-->
        <div class="partner partner-layout style-1">
            <div class="container">
                <div class="heading">
                    <h3 class="heading-section">Our Partners</h3>
                </div>
                <div
                    class="partner-list owl-carousel"
                    data-center="0"
                    data-col-lg="4"
                    data-col-md="2"
                    data-col-sm="1"
                    data-items="5"
                >
                    <div class="partner-item">
                        <a href="#">
                            <img alt="partner" src="{{asset('img/partner/1.png') }}"/>
                        </a>
                    </div>
                    <div class="partner-item">
                        <a href="#">
                            <img alt="partner" src="{{asset('img/partner/2.png') }}"/>
                        </a>
                    </div>
                    <div class="partner-item">
                        <a href="#">
                            <img alt="partner" src="{{asset('img/partner/3.png') }}"/>
                        </a>
                    </div>
                    <div class="partner-item">
                        <a href="#">
                            <img alt="partner" src="{{asset('img/partner/4.png') }}"/>
                        </a>
                    </div>
                    <div class="partner-item">
                        <a href="#">
                            <img alt="partner" src="{{asset('img/partner/5.png') }}"/>
                        </a>
                    </div>
                    <div class="partner-item">
                        <a href="#">
                            <img alt="partner" src="{{asset('img/partner/6.png') }}"/>
                        </a>
                    </div>
                    <div class="partner-item">
                        <a href="#">
                            <img alt="partner" src="{{asset('img/partner/7.png') }}"/>
                        </a>
                    </div>
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

