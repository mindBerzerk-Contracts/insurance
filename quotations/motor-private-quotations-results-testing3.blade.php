@extends("layouts.master")

@section('title')
    Insurance Product Details
@endsection

@section('content')
    <!-- HEADING PAGE-->
    <div class="heading-page heading-normal heading-project">
        <div class="container">
            <ul class="au-breadcrumb">
                <li class="au-breadcrumb-item">
                    <i class="fa fa-home"></i>
                    <a href="/home">Home</a>
                </li>
                <li class="au-breadcrumb-item">
                    <i class="fa fa-question-circle"></i>
                    <a href="/motor-private-quotation">Quotations</a>
                </li>
                <li class="au-breadcrumb-item active">
                    <a href="/compare-insurance">Quotations Results</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- END HEADING PAGE-->
    <!-- END HEADING PAGE-->
    <div class="page-content services-detail-1">
        <div class="container">

            <div class="row">
                <div class="col">

                    <div class="post-paragraph p1">
                        <div class="post-heading">
                            <h3>Motor Private Quotation Results</h3>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-3">
                            <div class="post-with-image">
                                <div class="post-paragraph">
                                    <div class="post-heading">
                                        <h3>Value of Car</h3>
                                    </div>
                                    <div class="post-content">
                                        <p>KSH {{number_format($privateResponseBody["inputs"]["vehicleValue"],2) }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="post-with-image">
                                <div class="post-paragraph">
                                    <div class="post-heading">
                                        <h3>Vehicle Age</h3>
                                    </div>
                                    <div class="post-content">
                                        <p>{{$privateResponseBody["inputs"]["vehicleAge"] }} years</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="post-with-image">
                                <div class="post-paragraph">
                                    <div class="post-heading">
                                        <h3>Make | Model</h3>
                                    </div>
                                    <div class="post-content">
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quote SERVICES DERAIL 1-->
                    @foreach ($privateResponseBody["results"] as $privateResponse)
                        <div class="post-content-box">

                            <div class="row">

                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <div class="post-with-image">
                                                <div class="post-paragraph">
                                                    <div class="post-heading">
                                                        <h4>{{$privateResponse["key"]}} Insurance</h4>
                                                    </div>
                                                </div>
                                                <div class="post-image">
                                                    <img alt="post services" class="img-fluid"
                                                         src="{{ asset('img/partner/partner-1.png') }}"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="post-with-image">
                                                <div class="post-paragraph">
                                                    <div class="post-heading">
                                                        <p></p>
                                                        <h4>Basic Premium</h4>
                                                    </div>
                                                </div>
                                                <ul>
                                                    <li>

                                                        <p>
                                                            <span
                                                                class="bold">KSH {{number_format($privateResponse["premium"],2)}}</span>
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="post-with-image">
                                                <div class="post-paragraph">
                                                    <div class="post-heading">
                                                        <h4>Additional Covers</h4>
                                                    </div>
                                                </div>

                                                <ul>
                                                    <li>
                                                        @foreach ($privateResponse["Additional-covers"] as $key=>$value)
                                                            <p>
                                                                <span class="bold">{{ $key }} : </span> {{ $value }}
                                                            </p>
                                                        @endforeach
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col">
                                    <div class="post-with-image">
                                        <div class="post-paragraph">
                                            <div class="post-heading">
                                                <h4>Limits Of Liability</h4>
                                            </div>
                                        </div>
                                        <ul>
                                            <li>

                                                <p>
                                                    <span class="bold">Windscreen & Window Glass:</span>Kshs. 30,000
                                                </p>
                                            </li>

                                        </ul>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="post-with-image">
                                        <div class="post-paragraph">
                                            <div class="post-heading">
                                                <h4>Applicable Excess</h4>
                                            </div>
                                        </div>
                                        <ul>
                                            <li>

                                                <p>
                                                    <span class="bold">Own Damage/Partial Theft:</span>2.5% of Sum
                                                    Insured
                                                    Minimum Ksh 20,000
                                                </p>
                                            </li>
                                        </ul>

                                    </div>
                                </div>


                            </div>


                        </div>

                    @endforeach


                </div>
            </div>

        </div>
        <!--Pagination-->
        <div class="container">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
        <!--Pagination-->
    </div>


@endsection
