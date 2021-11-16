@extends("layouts.master")

@section('title')
    Private Motor Quotation
@endsection

@section('content')

    <div class="page-content get-a-quote get-a-quote-3">
        <!-- HEADING PAGE-->
        <div class="heading-page heading-normal heading-project">
            <div class="container">
                <ul class="au-breadcrumb">
                    <li class="au-breadcrumb-item">
                        <i class="fa fa-home"></i>
                        <a href="/home">Home</a>
                    </li>
                    <li class="au-breadcrumb-item">
                        <i aria-hidden="true" class="fa fa-university"></i>
                        <a href="/compare-insurance">Compare Insurance</a>
                    </li>
                    <li class="au-breadcrumb-item ">
                        <i aria-hidden="true" class="fa fa-truck"></i>
                        <a href="/motor-commercial">Motor Commercial Quotation</a>
                    </li>
                    <li class="au-breadcrumb-item active">
                        <a href="/motor-commercial-quotation">Motor Commercial Quotation</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- END HEADING PAGE-->
        <!-- Success message -->

        <div class="row">


        </div>

        <div class="quote-container">

            <div class="container">
                @if($errors->any())

                    <div class="alert alert-danger">
                        <h4>{{$errors->first()}}</h4>
                    </div>
                @endif

                <div class="row">
                    <div class="col-lg-12">
                        <!-- GET A QUOTE, STYLE 3-->
                        <section class="quote-form quote-form-style-3">
                            <div class="head-section">
                                <h4>Motor Commercial Quotation</h4>
                            </div>

                            <form method="post" action="{{ route('motor-commercial-quotations-results') }}"
                                  class="row g-3 needs-validation" novalidate>
                                @csrf

                                <div class="quote-form-container">
                                    <div class="quote-form-heading">
                                        <h4>Start your Motor Commercial Quote below.</h4>
                                    </div>

                                    <div class="col-md-12 position-relative">
                                        <label for="validationTooltip03" class="form-label text-white">
                                            Vehicle Value
                                        </label>
                                        {{-- @foreach ($commercialResponseBody as $commercialResponse)--}}
                                        <input type="number" class="form-control" id="vehicleValue" name="vehicleValue"
                                               placeholder="Ksh" required>
                                        {{-- @endforeach--}}
                                        <div class="invalid-tooltip">
                                            Please provide a valid Car Value.
                                        </div>
                                    </div>

                                    <div class="col-md-12 position-relative">
                                        <label for="validationTooltip03" class="form-label text-white">
                                            Number Of Seats
                                        </label>
                                        {{-- @foreach ($commercialResponseBody as $commercialResponse)--}}
                                        <input type="number" class="form-control" id="seats" name="seats" required>
                                        {{-- @endforeach--}}
                                        <div class="invalid-tooltip">
                                            Please provide a valid Number of Seats.
                                        </div>
                                    </div>

                                    <div class="col-md-12 position-relative">
                                        <label for="validationTooltip03" class="form-label text-white">
                                            Type of Class
                                        </label>
                                        {{-- @foreach ($commercialResponseBody as $commercialResponse)--}}
                                        <input type="number" class="form-control" id="class" name="class" min="1"
                                               max="5" placeholder="between 1 and 5" required>
                                        {{-- @endforeach--}}
                                        <div class="invalid-tooltip">
                                            Please provide a Class.
                                        </div>
                                    </div>

                                    {{--<div class="col-md-12 position-relative">
                                        <label for="validationTooltip04" class="form-label text-white">
                                            Class
                                        </label>
                                        <select name="class" id="class" class="form-select dropdown" required>
                                            <option selected disabled value="">Choose a Class</option>
                                            @if($commercialResponseBody)
                                                @foreach ($commercialResponseBody as $commercialResponse)
                                                    <option value="{{ $commercialResponse->id }}">{{ $commercialResponse->class }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                        <div class="invalid-tooltip">
                                            Please select a valid Class.
                                        </div>
                                    </div>--}}


                                    <div class="col-md-12 position-relative">
                                        <label for="validationTooltip04" class="form-label text-white">Make |
                                            Model</label>
                                        <select name="make" class="form-select dropdown" id="make" required>
                                            <option selected disabled value="">Choose a Make</option>
                                            @if($commercialResponseBody)
                                                @foreach ($commercialResponseBody as $commercialResponse)
                                                    <option
                                                        value="{{ $commercialResponse->id }}">{{ $commercialResponse->make }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                        <div class="invalid-tooltip">
                                            Please select a valid Model | Model.
                                        </div>
                                    </div>

                                    <div class="col-md-12 position-relative">
                                        <label for="validationTooltip04" class="form-label text-white">Year</label>
                                        <select name="yom" class="form-select" id="yom" required>
                                            <option selected disabled value="">Year of Manufacture</option>
                                            <option value=2021>2021</option>
                                            <option value=2020>2020</option>
                                            <option value=2019>2019</option>
                                            <option value=2018>2018</option>
                                            <option value=2017>2017</option>
                                            <option value=2016>2016</option>
                                            <option value=2015>2015</option>
                                            <option value=2014>2014</option>
                                            <option value=2013>2013</option>
                                            <option value=2012>2012</option>
                                            <option value=2011>2011</option>
                                            <option value=2010>2010</option>
                                            <option value=2009>2009</option>
                                            <option value=2008>2008</option>
                                            <option value=2007>2007</option>
                                            <option value=2006>2006</option>
                                            <option value=2005>2005</option>
                                            <option value=2004>2004</option>
                                            <option value=2003>2003</option>
                                        </select>
                                        <div class="invalid-tooltip">
                                            Please select a valid Year of Manufacture.
                                        </div>
                                    </div>

                                    <div class="privateSubmit">
                                        <button class="btn-warning btn" type="submit">Get a Quote</button>
                                    </div>
                                </div>

                                {{ method_field('POST') }}


                            </form>

                            <script>
                                // Example starter JavaScript for disabling form submissions if there are invalid fields
                                (function () {
                                    'use strict';

                                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                    var forms = document.querySelectorAll('.needs-validation');

                                    // Loop over them and prevent submission
                                    Array.prototype.slice.call(forms)
                                        .forEach(function (form) {
                                            form.addEventListener('submit', function (event) {
                                                if (!form.checkValidity()) {
                                                    event.preventDefault();
                                                    event.stopPropagation()
                                                }

                                                form.classList.add('was-validated')
                                            }, false)
                                        })
                                })()
                            </script>
                        </section>
                        <!-- END GET A QUOTE, STYLE 1-->
                    </div>
                </div>
            </div>
        </div>


        <div class="content-box-container">
            <div class="container">
                <!-- CONTENT BOX, STYLE 2-->
                <section class="content-box content-box-layout style-1">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="content-box-item style-2 match-item">
                                <div class="content-holder">
                                    <div class="content-box-icon">
                                        <i class="far fa-clock"></i>
                                    </div>
                                    <div class="content-box-main">
                                        <div class="title">
                                            <h4>Simple</h4>
                                        </div>
                                        <div class="content">
                                            <p>Cras ut nulla faucibus, finibus mi id, pellentesque nunc</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="content-box-item style-2 match-item">
                                <div class="content-holder">
                                    <div class="content-box-icon">
                                        <i class="fa fa-lock"></i>
                                    </div>
                                    <div class="content-box-main">
                                        <div class="title">
                                            <h4>Safe</h4>
                                        </div>
                                        <div class="content">
                                            <p>Fusce at accumsan justo. Nulla lacus efficitur vel aliquam sed, fringilla
                                                sit
                                                amet neque.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="content-box-item style-2 match-item">
                                <div class="content-holder">
                                    <div class="content-box-icon">
                                        <i class="fa fa-cogs"></i>
                                    </div>
                                    <div class="content-box-main">
                                        <div class="title">
                                            <h4>Convenient</h4>
                                        </div>
                                        <div class="content">
                                            <p>In ut lectus in quam tincidunt tempus eget at sem. Duis ac commodo
                                                purus.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- END CONTENT BOX, STYLE 2-->
            </div>
        </div>
    </div>

@endsection
