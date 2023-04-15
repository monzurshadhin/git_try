
@extends('admin.master')
@section('title')
    Edit Category
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class=" text-center text-uppercase">Edit Category</h6>
                        <hr/>
                        <form class="row g-3" action="{{route('update.category')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="category_id" value="{{$category->id}}">
                            <div class="col-12">
                                <label class="form-label">Category Name</label>
                                <input type="text" name="category_name" value="{{$category->category_name}}" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Image</label>
                                <input type="file" name="image" value="{{asset($category->image)}}" class="form-control">
                            </div>

                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
