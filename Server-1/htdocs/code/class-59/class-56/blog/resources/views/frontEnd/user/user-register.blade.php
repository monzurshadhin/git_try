@extends('frontEnd.master')
@section('content')
    <div class="row align-items-center m-5">
        <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
            <div class="blog-content-wrap p-4">
    <form class="comment-form" action="{{route('new.user')}}" method="post" >
        @csrf
        <h5>Ragistration</h5>
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
                <input type="text" class="form-control" name="password" placeholder="Password">
            </div>

         </div>
                <button class="btn btn-solid" type="submit">Submit</button>
    </form>
            </div>
        </div>
    </div>
@endsection
