@extends("layouts.master")

@section('title')
    Motor Commercial Quotation
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
                    <i class="fa fa-bus"></i>
                    <a href="/motor-commercial-quotation">Motor Commercial Quotation</a>
                </li>
                <li class="au-breadcrumb-item">
                    <i class="fas fa-poll"></i>
                    <a href="/motor-commercial-quotations-results">Motor Commercial Quotations Results</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- END HEADING PAGE-->
    <!-- END HEADING PAGE-->

    <div class="page-content services-detail-1">
        <div class="container">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong> Total Results!</strong> {{$commercialResponseBody["inputs"]["result size"] }}
            </div>
            <div class="post-paragraph p1">
                <div class="post-heading">
                    <h3>Motor Commercial Quotation Results</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-md">
                    <div class="post-with-image">
                        <div class="post-paragraph">
                            <div class="post-heading">
                                <h3>Value of Car</h3>
                            </div>
                            <div class="post-content">
                                <p>KSH {{number_format($commercialResponseBody["inputs"]["vehicleValue"],2) }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="post-with-image">
                        <div class="post-paragraph">
                            <div class="post-heading">
                                <h3>Vehicle Age</h3>
                            </div>
                            <div class="post-content">
                                <p>{{$commercialResponseBody["inputs"]["vehicleAge"] }} years</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="post-with-image">
                        <div class="post-paragraph">
                            <div class="post-heading">
                                <h3>Class</h3>
                            </div>
                            <div class="post-content">
                                <p>{{$commercialResponseBody["inputs"]["class"] }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="post-with-image">
                        <div class="post-paragraph">
                            <div class="post-heading">
                                <h3>No of Seats</h3>
                            </div>
                            <div class="post-content">
                                <p>{{$commercialResponseBody["inputs"]["seats"] }}</p>
                            </div>
                        </div>
                    </div>
                </div>


                {{--  <h5>Vehicle Value:<strong>KSH {{number_format($commercialResponseBody["inputs"]["vehicleValue"],2) }}</strong> Vehicle
                      Age:<strong> {{$commercialResponseBody["inputs"]["vehicleAge"] }} years</strong></h5>
                  <hr/>--}}
            </div>


            {{--@foreach ($commercialResponseBody["results"] as $commercialResponse)

                <div class="post-content-box">

                    <div class="row">

                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <img class="card-img" src="{{ asset('img/partner/partner-1.png') }}"
                                         alt="Insurance Logo">
                                </div>

                                <div class="col-sm-5">
                                    <div class="card-body">
                                        <div class="post-with-image">
                                            <div class="post-paragraph">
                                                <div class="post-heading">
                                                    <h4>{{$commercialResponse["key"]}}</h4>
                                                </div>
                                                <div class="post-heading"> Premium :
                                                    <strong>
                                                        KSH {{number_format($commercialResponse["premium"],2)}}</strong>
                                                </div>
                                            </div>

                                            <p class="card-text"> Cover Type : {{$commercialResponse["covertype"]}}</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-5">

                            <div class="accordion" id='accordionExample-{{$commercialResponse["id"]}}'>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne-{{$commercialResponse['id']}}">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne-{{$commercialResponse['id']}}"
                                                aria-expanded="false"
                                                aria-controls="collapseOne-{{$commercialResponse['id']}}">
                                            Additional Benefits
                                        </button>
                                    </h2>
                                    <div id="collapseOne-{{$commercialResponse['id']}}"
                                         class="accordion-collapse collapse"
                                         aria-labelledby="headingOne-{{$commercialResponse['id']}}"
                                         data-bs-parent="#accordionExample-{{$commercialResponse['id']}}">
                                        <div class="accordion-body">
                                            <ul>
                                                @foreach ($commercialResponse["Additional-covers"] as $key=>$value)
                                                    <li><p><span class="bold"> {{ $key }} : </span> {{ $value }} </p>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo-{{$commercialResponse['id']}}">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapseTwo-{{$commercialResponse['id']}}"
                                                aria-expanded="false"
                                                aria-controls="collapseTwo-{{$commercialResponse['id']}}">
                                            Limits Of Liability
                                        </button>
                                    </h2>
                                    <div id="collapseTwo-{{$commercialResponse['id']}}"
                                         class="accordion-collapse collapse"
                                         aria-labelledby="headingTwo-{{$commercialResponse['id']}}"
                                         data-bs-parent="#accordionExample-{{$commercialResponse['id']}}">
                                        <div class="accordion-body">
                                            <ul>
                                                @foreach ($commercialResponse["limits"] as $key=>$value)
                                                    <li><p><span class="bold"> {{ $key }} : </span> {{ $value }} </p>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree-{{$commercialResponse['id']}}">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapseThree-{{$commercialResponse['id']}}"
                                                aria-expanded="false"
                                                aria-controls="collapseThree-{{$commercialResponse['id']}}">
                                            Applicable Excesses
                                        </button>
                                    </h2>
                                    <div id="collapseThree-{{$commercialResponse['id']}}"
                                         class="accordion-collapse collapse"
                                         aria-labelledby="headingThree-{{$commercialResponse['id']}}"
                                         data-bs-parent="#accordionExample-{{$commercialResponse['id']}}">
                                        <div class="accordion-body">
                                            <ul>
                                                @foreach ($commercialResponse["excess"] as $key=>$value)
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
                            <a href="#" class="btn btn-success">I am Interested</a>
                        </div>
                    </div>


                </div>


            @endforeach--}}
            @foreach ($commercialResponseBody["results"] as $commercialResponse)

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
                                                    <h4>{{$commercialResponse["key"]}}</h4>
                                                </div>
                                                Premium:<p class="fw-bold">
                                                    <strong>
                                                        KSH {{number_format($commercialResponse["premium"],2)}}</strong>
                                                </p>
                                            </div>

                                            Cover Type : <p class="fw-bold"> {{$commercialResponse["covertype"]}}</p>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="accordion accordion-flush"
                                     id='accordionExample-{{$commercialResponse["id"]}}'>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne-{{$commercialResponse['id']}}">
                                            <button class="accordion-button collapsed fw-bold active" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne-{{$commercialResponse['id']}}"
                                                    aria-expanded="false"
                                                    aria-controls="collapseOne-{{$commercialResponse['id']}}">
                                                Additional Benefits
                                            </button>
                                        </h2>
                                        <div id="collapseOne-{{$commercialResponse['id']}}"
                                             class="accordion-collapse collapse show"
                                             aria-labelledby="headingOne-{{$commercialResponse['id']}}"
                                             data-bs-parent="#accordionExample-{{$commercialResponse['id']}}">
                                            <div class="accordion-body">
                                                <ul>
                                                    @foreach ($commercialResponse["Additional-covers"] as $key=>$value)
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
                            <div class="accordion accordion-flush" id='accordionExample-{{$commercialResponse["id"]}}'>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo-{{$commercialResponse['id']}}">
                                        <button class="accordion-button collapsed fw-bold" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapseTwo-{{$commercialResponse['id']}}"
                                                aria-expanded="false"
                                                aria-controls="collapseTwo-{{$commercialResponse['id']}}">
                                            Limits Of Liability
                                        </button>
                                    </h2>
                                    <div id="collapseTwo-{{$commercialResponse['id']}}"
                                         class="accordion-collapse collapse show"
                                         aria-labelledby="headingTwo-{{$commercialResponse['id']}}"
                                         data-bs-parent="#accordionExample-{{$commercialResponse['id']}}">
                                        <div class="accordion-body">
                                            <ul>
                                                @foreach ($commercialResponse["limits"] as $key=>$value)
                                                    <li><p><span class="bold"> {{ $key }} : </span> {{ $value }} </p>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree-{{$commercialResponse['id']}}">
                                        <button class="accordion-button collapsed fw-bold" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapseThree-{{$commercialResponse['id']}}"
                                                aria-expanded="false"
                                                aria-controls="collapseThree-{{$commercialResponse['id']}}">
                                            Applicable Excesses
                                        </button>
                                    </h2>
                                    <div id="collapseThree-{{$commercialResponse['id']}}"
                                         class="accordion-collapse collapse"
                                         aria-labelledby="headingThree-{{$commercialResponse['id']}}"
                                         data-bs-parent="#accordionExample-{{$commercialResponse['id']}}">
                                        <div class="accordion-body">
                                            <ul>
                                                @foreach ($commercialResponse["excess"] as $key=>$value)
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
