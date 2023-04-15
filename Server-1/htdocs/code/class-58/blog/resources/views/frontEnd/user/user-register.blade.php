@extends('frontEnd.master')
@section('title')
    Registration
@endsection
@section('content')
    <div class="container">
        <div class="row align-items-center m-5">
            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 p-5" style="border: 1px solid lightgray">
                <div class="blog-content-wrap">
                    <form class="comment-form" action="{{route('new.user')}}" method="post">
                        @csrf
                        <h5>Registration</h5>
                        <div class="row">
                            <div class="col-12 col-md-6 mb-4">
                                <input type="text" class="form-control" name="name" placeholder="Full Name">
                            </div>
                            <div class="col-12 col-md-6 mb-4">
                                <input type="email" class="form-control" name="email" placeholder="Email">
                            </div>
                            <div class="col-12 col-md-6 mb-4">
                                <input type="text" class="form-control" name="phone" placeholder="Phone">
                            </div>
                            <div class="col-12 col-md-6 mb-4">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                        </div>
                        <p>Already have an account? <a href="{{route('customer.login')}}">Login</a></p>
                        <button type="submit" class="btn btn-solid btn-block">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
