@extends('frontEnd.master')
@section('content')
    <div class="row align-items-center m-5">
        <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
            <div class="blog-content-wrap p-4">
                <h3 class="text-center text-danger">{{Session('message')}} </h3>
                <form class="comment-form" action="{{route('customer.login')}}" method="post" >
                    @csrf
                    <h5>Login </h5>
                    <div class="row">
                        <div class="col-12 col-md-6 mb-4">
                            <input type="text" class="form-control" name="user_name" placeholder="email or phone">
                        </div>

                        <div class="col-12 col-md-6 mb-4">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>

                    </div>
                    <button class="btn btn-solid" type="submit">log in</button>
                </form>
            </div>
        </div>
    </div>
@endsection
