@extends("layouts.master")

@section('title')
    Motor Private Quotation
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
                    <i class="fa fa-car"></i>
                    <a href="/motor-private-quotation">Motor Private Quotation</a>
                </li>
                <li class="au-breadcrumb-item active">
                    <a href="/motor-private-quotations-results">Motor Private Quotations Results</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- END HEADING PAGE-->
    <!-- END HEADING PAGE-->
    <div class="page-content services-detail-1">
        <div class="container">

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
                                <h3>Date</h3>
                            </div>
                            <div class="post-content">
                                <p>{{$privateResponseBody["inputs"]["dt"] }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="post-with-image">
                        <div class="post-paragraph">
                            <div class="post-heading">
                                <h3>Total Results</h3>
                            </div>
                            <div class="post-content">
                                <p>{{$privateResponseBody["inputs"]["result size"] }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{--  <h5>Vehicle Value:<strong>KSH {{number_format($privateResponseBody["inputs"]["vehicleValue"],2) }}</strong> Vehicle
                      Age:<strong> {{$privateResponseBody["inputs"]["vehicleAge"] }} years</strong></h5>
                  <hr/>--}}
            </div>


            @foreach ($privateResponseBody["results"] as $privateResponse)

                <div class="post-content-box">

                    <div class="row">

                        <div class="col-sm-4">

                            <div class="row">
                                <div class="col-sm-6">
                                    <img class="card-img" style="padding: 15px 15px 15px 15px;"
                                         src="{{ asset('img/partner/partner-1.png') }}"
                                         alt="Insurance Logo">
                                </div>

                                <div class="col-sm-6">
                                    <div class="card-body">
                                        <div class="post-with-image">
                                            <div class="post-paragraph">
                                                <div class="post-heading">
                                                    <h4>{{$privateResponse["key"]}}</h4>
                                                </div>
                                                Premium:<p class="fw-bold">
                                                    <strong>
                                                        KSH {{number_format($privateResponse["premium"],2)}}</strong>
                                                </p>
                                            </div>

                                            Cover Type : <p class="fw-bold"> {{$privateResponse["covertype"]}}</p>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="accordion accordion-flush" id='accordionExample-{{$privateResponse["id"]}}'>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne-{{$privateResponse['id']}}">
                                            <button class="accordion-button collapsed fw-bold active" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne-{{$privateResponse['id']}}"
                                                    aria-expanded="false"
                                                    aria-controls="collapseOne-{{$privateResponse['id']}}">
                                                Additional Benefits
                                            </button>
                                        </h2>
                                        <div id="collapseOne-{{$privateResponse['id']}}"
                                             class="accordion-collapse collapse show"
                                             aria-labelledby="headingOne-{{$privateResponse['id']}}"
                                             data-bs-parent="#accordionExample-{{$privateResponse['id']}}">
                                            <div class="accordion-body">
                                                <ul>
                                                    @foreach ($privateResponse["Additional-covers"] as $key=>$value)
                                                        <li><p><span class="bold"> {{ $key }} : </span> {{ $value }}
                                                            </p>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="accordion accordion-flush" id='accordionExample-{{$privateResponse["id"]}}'>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo-{{$privateResponse['id']}}">
                                        <button class="accordion-button collapsed fw-bold" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapseTwo-{{$privateResponse['id']}}"
                                                aria-expanded="false"
                                                aria-controls="collapseTwo-{{$privateResponse['id']}}">
                                            Limits Of Liability
                                        </button>
                                    </h2>
                                    <div id="collapseTwo-{{$privateResponse['id']}}"
                                         class="accordion-collapse collapse show"
                                         aria-labelledby="headingTwo-{{$privateResponse['id']}}"
                                         data-bs-parent="#accordionExample-{{$privateResponse['id']}}">
                                        <div class="accordion-body">
                                            <ul>
                                                @foreach ($privateResponse["limits"] as $key=>$value)
                                                    <li><p><span class="bold"> {{ $key }} : </span> {{ $value }} </p>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree-{{$privateResponse['id']}}">
                                        <button class="accordion-button collapsed fw-bold" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapseThree-{{$privateResponse['id']}}"
                                                aria-expanded="false"
                                                aria-controls="collapseThree-{{$privateResponse['id']}}">
                                            Applicable Excesses
                                        </button>
                                    </h2>
                                    <div id="collapseThree-{{$privateResponse['id']}}"
                                         class="accordion-collapse collapse"
                                         aria-labelledby="headingThree-{{$privateResponse['id']}}"
                                         data-bs-parent="#accordionExample-{{$privateResponse['id']}}">
                                        <div class="accordion-body">
                                            <ul>
                                                @foreach ($privateResponse["excess"] as $key=>$value)
                                                    <li><p><span class="bold"> {{ $key }} : </span> {{ $value }} </p>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="col-sm-2">
                            <a href="#" class="btn btn-success" style="margin-top:180%;">I am Interested</a>
                        </div>


                    </div>


                </div>



            @endforeach
        </div>

    </div>


@endsection
