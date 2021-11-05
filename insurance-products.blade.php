@extends("layouts.master")

@section("title")
Insurance Product Details
@endsection

<div class="page-content project-list-page">
    <!-- HEADING PAGE-->
    <div class="heading-page heading-normal heading-project">
        <div class="container">
            <ul class="au-breadcrumb">
                <li class="au-breadcrumb-item">
                    <i class="fa fa-home"></i>
                    <a href="resources/views/home.blade.php">Home</a>
                </li>
                <li class="au-breadcrumb-item active">
                    <a href="resources/views/home.blade.php">Our Products</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- END HEADING PAGE-->
    <!-- PROJECT LIST-->
    <section class="projects-layout">
        <div class="container">
            <div class="project-subjects">
                <ul class="filter-button-group">
                    <li class="is-checked button"
                        data-filter=".Financial, .Investments, .Taxes, .Insurance, .Retirement">
                        <h4>All</h4>
                    </li>
                    <li class="button" data-filter=".Financial">
                        <h4>Financial</h4>
                    </li>
                    <li class="button" data-filter=".Investments">
                        <h4>Investments</h4>
                    </li>
                    <li class="button" data-filter=".Taxes">
                        <h4>Medical</h4>
                    </li>
                    <li class="button" data-filter=".Insurance">
                        <h4>Insurance</h4>
                    </li>
                    <li class="button" data-filter=".Retirement">
                        <h4>Retirement</h4>
                    </li>
                </ul>
            </div>
            <div class="row isotope-grid">
                <div class="col-md-4 col-sm-6 col-xs-12 isotope-item Retirement">
                    <div class="project-item match-item">
                        <div class="project-item-img">
                            <img alt="project-1.jpg" class="img-fluid" src="public/img/projects/1.png"/>
                        </div>
                        <div class="project-item-title">
                            <a href="resources/views/pages/insurance-product-detail.blade.php">2018 Retirement Plan</a>
                        </div>
                        <div class="project-item-subjects">
                            <p>Retirement</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 isotope-item Insurance">
                    <div class="project-item match-item">
                        <div class="project-item-img">
                            <img alt="project-2.jpg" class="img-fluid" src="public/img/projects/2.png"/>
                        </div>
                        <div class="project-item-title">
                            <a href="resources/views/pages/insurance-product-detail.blade.php">Insurance Life</a>
                        </div>
                        <div class="project-item-subjects">
                            <p>Insurance</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 isotope-item Financial">
                    <div class="project-item match-item">
                        <div class="project-item-img">
                            <img alt="project-3.jpg" class="img-fluid" src="public/img/projects/3.png"/>
                        </div>
                        <div class="project-item-title">
                            <a href="resources/views/pages/insurance-product-detail.blade.php">Financial Report</a>
                        </div>
                        <div class="project-item-subjects">
                            <p>Financial</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 isotope-item Taxes">
                    <div class="project-item match-item">
                        <div class="project-item-img">
                            <img alt="project-4.jpg" class="img-fluid" src="public/img/projects/4.png"/>
                        </div>
                        <div class="project-item-title">
                            <a href="resources/views/pages/insurance-product-detail.blade.php">IEM Financial
                                Statements</a>
                        </div>
                        <div class="project-item-subjects">
                            <p>Taxes</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 isotope-item Insurance">
                    <div class="project-item match-item">
                        <div class="project-item-img">
                            <img alt="project-5.jpg" class="img-fluid" src="public/img/projects/5.png"/>
                        </div>
                        <div class="project-item-title">
                            <a href="resources/views/pages/insurance-product-detail.blade.php">MO Insurance Pack 2</a>
                        </div>
                        <div class="project-item-subjects">
                            <p>Insurance</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 isotope-item Financial">
                    <div class="project-item match-item">
                        <div class="project-item-img">
                            <img alt="project-6.jpg" class="img-fluid" src="public/img/projects/6.png"/>
                        </div>
                        <div class="project-item-title">
                            <a href="resources/views/pages/insurance-product-detail.blade.php">Business Loan</a>
                        </div>
                        <div class="project-item-subjects">
                            <p>Financial</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 isotope-item Investments">
                    <div class="project-item match-item">
                        <div class="project-item-img">
                            <img alt="project-7.jpg" class="img-fluid" src="public/img/projects/7.png"/>
                        </div>
                        <div class="project-item-title">
                            <a href="resources/views/pages/insurance-product-detail.blade.php">Enterprise Loan</a>
                        </div>
                        <div class="project-item-subjects">
                            <p>Investments</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 isotope-item Financial">
                    <div class="project-item match-item">
                        <div class="project-item-img">
                            <img alt="project-8.jpg" class="img-fluid" src="public/img/projects/8.png"/>
                        </div>
                        <div class="project-item-title">
                            <a href="resources/views/pages/insurance-product-detail.blade.php">Money Market</a>
                        </div>
                        <div class="project-item-subjects">
                            <p>Financial</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 isotope-item Insurance">
                    <div class="project-item match-item">
                        <div class="project-item-img">
                            <img alt="project-9.jpg" class="img-fluid" src="public/img/projects/9.png"/>
                        </div>
                        <div class="project-item-title">
                            <a href="resources/views/pages/insurance-product-detail.blade.php">MO Insurance</a>
                        </div>
                        <div class="project-item-subjects">
                            <p>Insurance</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END PROJECT LIST-->
    <!-- CALL TO ACTION, STYLE 4-->
    <section class="call-to-action call-to-action-layout style-2 style-4">
        <div class="container">
            <div class="call-to-action-block">
                <div class="call-to-action-content">
                    <h4>Find Information And Get Free Insurance Quotes.</h4>
                </div>
                <div class="call-to-action-select fancy-select-wrapper">
                    <select class="basic">
                        <option value="">Select something…</option>
                        <option>Car Insurance</option>
                        <option>Home Insurance</option>
                        <option>Life Insurance</option>
                        <option>Travel Insurance</option>
                        <option>Business Insurance</option>
                        <option>Landlord Insurance</option>
                        <option>Umbrella Insurance</option>
                        <option>Boat Insurance</option>
                    </select>
                    <button class="au-btn au-btn-orange" onclick="window.location.href='compare-insurance.html';">Get a
                        quote
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- END CALL TO ACTION, STYLE 4-->
</div>

@endsection
