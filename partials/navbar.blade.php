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
                <button type="submit" class="searchButton">
                    <i class="fa fa-search"></i>
                </button>
            </form>

        </div>


    </div>
</nav>
