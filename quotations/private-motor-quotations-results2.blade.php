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
                    <a href="/private-motor-quotation">Quotations</a>
                </li>
                <li class="au-breadcrumb-item active">
                    <a href="/compareinsurance">Quotations Results</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- END HEADING PAGE-->
    <!-- END HEADING PAGE-->
    <div class="page-content services-detail-1">
        <div class="container">
            <h2>Motor Private Quotation Comparison</h2>
            <h5>Vehicle Value:<strong>KSH {{number_format($responseBody["inputs"]["vehicleValue"],2) }}</strong> Vehicle
                Age:<strong> {{$responseBody["inputs"]["vehicleAge"] }} years</strong></h5>
            <hr/>
            @foreach ($responseBody["results"] as $response)

                <div class="card" style="col-sm-11">
                    <div class="row no-gutters">
                        <div class="col-sm-2">
                            <img class="card-img" src="/images/defaultimg.png" alt="Insurance Logo">
                        </div>
                        <div class="col-sm-3">
                            <div class="card-body">
                                <h5 class="card-title">{{$response["key"]}}</h5>
                                <p class="card-text"> Premium :<strong>
                                        KSH {{number_format($response["premium"],2)}}</strong></p>
                                <p class="card-text"> Cover Type : {{$response["covertype"]}}</p>

                            </div>
                            <div class="card-body">
                                <p class="card-text"> Additional Benefits</strong></p>
                                <ul>
                                    @foreach ($response["Additional-covers"] as $key=>$value)
                                        <li> {{ $key }} : {{ $value }}</li>
                                    @endforeach
                                </ul>

                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="accordion" id='accordionExample-{{$response["id"]}}'>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne-{{$response['id']}}">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne-{{$response['id']}}" aria-expanded="false"
                                                aria-controls="collapseOne-{{$response['id']}}">
                                            Limits
                                        </button>
                                    </h2>
                                    <div id="collapseOne-{{$response['id']}}" class="accordion-collapse collapse"
                                         aria-labelledby="headingOne-{{$response['id']}}"
                                         data-bs-parent="#accordionExample-{{$response['id']}}">
                                        <div class="accordion-body">
                                            <ul>
                                                @foreach ($response["limits"] as $key=>$value)
                                                    <li> {{ $key }} : {{ $value }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo{{$response['id']}}">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapseTwo-{{$response['id']}}" aria-expanded="false"
                                                aria-controls="collapseTwo-{{$response['id']}}">
                                            Applicable Excesses
                                        </button>
                                    </h2>
                                    <div id="collapseTwo-{{$response['id']}}" class="accordion-collapse collapse"
                                         aria-labelledby="headingTwo-{{$response['id']}}"
                                         data-bs-parent="#accordionExample-{{$response['id']}}">
                                        <div class="accordion-body">
                                            <ul>
                                                @foreach ($response["excess"] as $key=>$value)
                                                    <li> {{ $key }} : {{ $value }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="col-sm-2">
                            <a href="#" class="btn btn-primary">I am Interested</a>
                        </div>
                    </div>

                </div>


            @endforeach
        </div>

    </div>


@endsection
