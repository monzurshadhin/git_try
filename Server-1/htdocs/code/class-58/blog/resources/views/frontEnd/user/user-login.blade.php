@extends('frontEnd.master')
@section('title')
    Login
@endsection
@section('content')
    <div class="container">
        <div class="row align-items-center m-5">
            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 p-5" style="border: 1px solid lightgray">
                <div class="blog-content-wrap">
                    <p class="text-center text-danger">{{session('message')}}</p>
                    <form class="comment-form" action="{{route('customer.login.check')}}" method="post">
                        @csrf
                        <h5>Login</h5>
                        <div class="row">
                            <div class="col-12 col-md-6 mb-4">
                                <input type="text" class="form-control" name="user_name" placeholder="user_name">
                            </div>
                            <div class="col-12 col-md-6 mb-4">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                        </div>
                        <p>Don't have any account? <a href="{{route('blogUser.register')}}">Register</a></p>
                        <button type="submit" class="btn btn-solid btn-block">LogIn</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
