<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-primary">

    <div class="container-fluid">

        <a class="navbar-brand" href="#">
            <img src="{{asset('img/icons/logo-2.png')}}" alt="" width="210" height="60">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/compare-insurance">
                        Compare Insurance
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/articles">
                        Articles
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/underconstruction">
                        Q&A
                    </a>
                </li>
            </ul>

            <form class="d-flex">
                <input class="form-control me-lg-1" type="search" placeholder="Search" aria-label="Search">
                <!-- Example split danger button -->
                <div class="btn-group">
                    <button type="button" class="btn btn-success">Search</button>
                    <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split"
                            data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/compare-insurance">Compare Insurance</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="/motor-private-quotation">Motor Private Quotation</a></li>
                        <li><a class="dropdown-item" href="/motor-commercial">Motor Commercial</a></li>
                    </ul>
                </div>
            </form>

        </div>


    </div>
</nav>
