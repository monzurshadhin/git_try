@extends('master')
@section('content')
    <section>
        <div class="container">
            <form class="row g-3 mt-5 card p-3" method="POST" action="{{route('user.update')}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$student->id}}">
                <div class="col-md-12">
                    <label for="inputPassword4" class="form-label" >Name</label>
                    <input type="text" name="name" value="{{$student->name}}" class="form-control" id="inputPassword4">
                </div>
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" name="email" value="{{$student->email}}" class="form-control" id="inputEmail4">
                </div>

                <div class="col-12">
                    <label for="inputAddress" class="form-label">Image</label>
                    <input type="file" name="image" class="form-control" id="inputAddress" >
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">submit</button>
                </div>
            </form>
        </div>
    </section>

@endsection
