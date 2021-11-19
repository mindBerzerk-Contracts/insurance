@extends("layouts.master")

@section("title")
    UnderConstruction
@endsection

@section("content")
    <div class="container p-0 d-flex align-items-center vh-180 justify-content-center">
        <div class="row w-100">
            <div class="col-md-12 text-center">
                <div class="underconstruction">
                    <img src="{{asset('img/underconstruction.svg')}}" class="w-100">
                    <h1 class="mb-0">We're Coming Soon.</h1>
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                    <h2>Page is under construction.</h2>
                    <h2 class="mb-0">We will launch Soon.</h2>
                </div>
            </div>
        </div>
    </div>

@endsection()
