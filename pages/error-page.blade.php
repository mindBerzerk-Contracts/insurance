@extends("layouts.master")

@section("title")
    Error page
@endsection

@section("content")
    <div class="container p-0 d-flex align-items-center vh-120 justify-content-center">
        <div class="row w-100">
            <div class="col-md-12 text-center">
                <div class="underconstruction">
                    <img src="{{asset('img/404.jpg')}}" class="w-100">
                    <ul>
                        <li><a href="/"><i class="fas fa-home"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection
