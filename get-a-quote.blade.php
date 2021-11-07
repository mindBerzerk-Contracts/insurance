@extends("layouts.master")

@section("title")
Quotation
@endsection

@section("content")

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
                <li class="au-breadcrumb-item active">
                    <a href="/compare-insurance">Quotation</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- END HEADING PAGE-->

    <div class="quote-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- GET A QUOTE, STYLE 3-->
                    <section class="quote-form quote-form-style-3">
                        <div class="head-section">
                            <h4>Step 1 of 2</h4>
                        </div>

                        <div class="quote-form-container">

                            <div class="quote-form-heading">
                                <h4>Start your Motor Quote below.</h4>
                            </div>
                            <div class="quote-form-item">
                                <div class="quote-form-label">
                                    <span>Vehicle Value</span>
                                </div>

                                <div class="input-group mb-3">
                                    <input aria-describedby="inputGroup-sizing-default"
                                           aria-label="Sizing example input" class="form-control"
                                           type="text">
                                </div>

                                <div class="quote-form-label">
                                    <span>Make | Model</span>
                                </div>
                                <div class="input-group mb-3 ">
                                    <select class="form-select" id="inputGroupSelect01 justify-content-end">
                                        <option selected>Choose...</option>
                                        <option value="1">Ford</option>
                                        <option value="2">Chevrolet</option>
                                        <option value="3">Nissan</option>
                                        <option value="3">Honda</option>
                                        <option value="3">Toyota</option>
                                    </select>
                                </div>


                                <div class="quote-form-label">
                                    <span>Year Of Manufacture</span>
                                </div>
                                <div class="input-group date ">
                                    <select aria-label="Example select with button addon" class="form-select"
                                            id="inputGroupSelect04">
                                        <option selected>Year</option>
                                        <option value="1">2021</option>
                                        <option value="2">2020</option>
                                        <option value="3">2019</option>
                                        <option value="4">2018</option>
                                        <option value="5">2017</option>
                                        <option value="6">2016</option>
                                        <option value="7">2015</option>
                                        <option value="8">2014</option>
                                        <option value="8">2013</option>
                                        <option value="8">2012</option>
                                        <option value="8">2011</option>
                                        <option value="8">2010</option>
                                        <option value="8">2009</option>
                                        <option value="8">2008</option>
                                        <option value="8">2007</option>
                                        <option value="8">2006</option>
                                        <option value="8">2005</option>
                                        <option value="8">2004</option>
                                        <option value="8">2003</option>
                                    </select>
                                </div>


                            </div>

                            <div class="form-button">
                                <button
                                    class="au-btn au-btn-orange au-btn-md"
                                    onclick="window.location.href='/quotations';">Get Quotations
                                </button>
                            </div>

                        </div>


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
                                    <i class="fa fa-clock-o"></i>
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
                                        <p>Fusce at accumsan justo. Nulla lacus efficitur vel aliquam sed, fringilla sit
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
                                        <p>In ut lectus in quam tincidunt tempus eget at sem. Duis ac commodo purus.</p>
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
