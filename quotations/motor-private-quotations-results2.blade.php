@extends("layouts.master2")

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
                                <p>KSH {{number_format($responseBody["inputs"]["vehicleValue"],2) }}</p>
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
                                <p>{{$responseBody["inputs"]["vehicleAge"] }} years</p>
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
                                <p>{{$responseBody["inputs"]["vehicleID"] }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{--  <h5>Vehicle Value:<strong>KSH {{number_format($responseBody["inputs"]["vehicleValue"],2) }}</strong> Vehicle
                      Age:<strong> {{$responseBody["inputs"]["vehicleAge"] }} years</strong></h5>
                  <hr/>--}}
            </div>


            @foreach ($responseBody["results"] as $response)

                <div class="post-content-box">

                    <div class="row">

                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <img class="card-img" src="{{ asset('img/partner/partner-1.png') }}"
                                         alt="Insurance Logo">
                                    {{--<div class="post-paragraph">
                                        <div class="post-heading">
                                            <h4>Additional Benefits</h4>
                                        </div>
                                        <ul>
                                            @foreach ($response["Additional-covers"] as $key=>$value)
                                                <li> {{ $key }} : {{ $value }}</li>
                                            @endforeach
                                        </ul>
                                    </div>--}}

                                </div>

                                <div class="col-sm-5">
                                    <div class="card-body">
                                        <div class="post-with-image">
                                            <div class="post-paragraph">
                                                <div class="post-heading">
                                                    <h4>{{$response["key"]}}</h4>
                                                </div>
                                                <div class="post-heading"> Premium :
                                                    <strong> KSH {{number_format($response["premium"],2)}}</strong>
                                                </div>
                                            </div>

                                            <p class="card-text"> Cover Type : {{$response["covertype"]}}</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-5">

                            <div class="accordion" id='accordionExample-{{$response["id"]}}'>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne-{{$response['id']}}">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne-{{$response['id']}}" aria-expanded="false"
                                                aria-controls="collapseOne-{{$response['id']}}">
                                            Additional Benefits
                                        </button>
                                    </h2>
                                    <div id="collapseOne-{{$response['id']}}" class="accordion-collapse collapse"
                                         aria-labelledby="headingOne-{{$response['id']}}"
                                         data-bs-parent="#accordionExample-{{$response['id']}}">
                                        <div class="accordion-body">
                                            <ul>
                                                @foreach ($response["Additional-covers"] as $key=>$value)
                                                    <li><p><span class="bold"> {{ $key }} : </span> {{ $value }} </p>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo-{{$response['id']}}">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapseTwo-{{$response['id']}}" aria-expanded="false"
                                                aria-controls="collapseTwo-{{$response['id']}}">
                                            Limits Of Liability
                                        </button>
                                    </h2>
                                    <div id="collapseTwo-{{$response['id']}}" class="accordion-collapse collapse"
                                         aria-labelledby="headingTwo-{{$response['id']}}"
                                         data-bs-parent="#accordionExample-{{$response['id']}}">
                                        <div class="accordion-body">
                                            <ul>
                                                @foreach ($response["limits"] as $key=>$value)
                                                    <li><p><span class="bold"> {{ $key }} : </span> {{ $value }} </p>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree-{{$response['id']}}">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapseThree-{{$response['id']}}"
                                                aria-expanded="false"
                                                aria-controls="collapseThree-{{$response['id']}}">
                                            Applicable Excesses
                                        </button>
                                    </h2>
                                    <div id="collapseThree-{{$response['id']}}" class="accordion-collapse collapse"
                                         aria-labelledby="headingThree-{{$response['id']}}"
                                         data-bs-parent="#accordionExample-{{$response['id']}}">
                                        <div class="accordion-body">
                                            <ul>
                                                @foreach ($response["excess"] as $key=>$value)
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
                            <a href="#" class="btn btn-outline-success">I am Interested</a>
                        </div>
                    </div>


                </div>


            @endforeach
        </div>

    </div>


@endsection
