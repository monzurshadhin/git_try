@extends('master')
@section('content')
<section>
    <div class="container my-5">
        <h1 class="text-center my-5">Student Information</h1>
        <form class="row g-3" method="POST" action="{{route('department.update')}}">
            @csrf
            <h5>{{session('message')}}</h5>
            <input type="hidden" name="dept_id" value="{{$department->id}}">
            <div class="col-md-6">
                <label for="inputName" class="form-label">Department Code</label>
                <input type="text" class="form-control" name="department_code" value="{{$department->department_code}}" id="inputName">
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Department Name</label>
                <input type="text" class="form-control" value="{{$department->department_name}}"  name="department_name" id="inputEmail4">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary form-control my-4">Submit</button>
            </div>
        </form>
    </div>
</section>
@endsection
