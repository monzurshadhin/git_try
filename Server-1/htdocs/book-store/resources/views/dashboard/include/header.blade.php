<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="{{asset('frontend-assets')}}/assets/icons/Logo.png" height="50px" width="150px" class="img-fluid" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Books</a>
                </li>
                <li class="nav-item">

{{--                    <a class="nav-link" href="{{Auth::user()?->uType == 'USR'?route('user.dashboard'):route('admin.dashboard')}}">Dashboard</a>--}}
                    <a class="nav-link" href="{{route('dashboard')}}">Dashboard</a>

                </li>

                @if(Auth::user())


                        <a class="nav-link">{{Auth::user()->name}}</a>

                    <li>
                        <a class="nav-link" href="" onclick="event.preventDefault(); document.getElementById('logoutForm').submit()">Logout</a>
                    </li>
                    <form action="{{route('logout')}}" method="post" id="logoutForm">
                        @csrf
                    </form>
                @else
                    <a class="nav-link" href="{{route('login')}}">Login</a>
                    <a class="nav-link" href="{{route('register')}}">Register</a>
                @endif


            </ul>

        </div>
    </div>
</nav>
