@extends('admin.master')
@section('title')
    Add Blog
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase">Blog Form</h6>
                        <hr/>
                        @if($message = Session::get('message'))
                            <div class="alert alert-success alert-dismissible fade show">
                                {{$message}}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> </button>
                            </div>
                        @endif
                        <form class="row g-3" action="{{route('new.Blog')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-12">
                                <label class="form-label">Category Name</label>
                                <select name="category_id" id="" class="form-control">
                                    <option >Select Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Author</label>
                                <input type="text" name="author_name" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Title</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Slug</label>
                                <input type="text" name="slug" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Description</label>
                                <textarea type="text" name="description" class="form-control"></textarea>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Blog Type</label>
                                <select name="blog_type" id="" class="form-control">
                                    <option >Select Blog Type</option>
                                    <option value="popular">Popular</option>
                                    <option value="trending">Trending</option>
                                    <option value="featured">Featured</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Date</label>
                                <input type="date" name="date" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Status</label>&nbsp;&nbsp;
                                <input type="radio" name="status" value="0">&nbsp;&nbsp;Unpublished&nbsp;
                                <input type="radio" name="status" value="1">&nbsp;&nbsp;Published
                            </div>

                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

