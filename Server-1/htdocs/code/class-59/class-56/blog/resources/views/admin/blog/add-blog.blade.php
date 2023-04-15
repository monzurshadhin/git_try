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
                        <h6 class=" text-center text-uppercase">Add Blog</h6>
                        <hr/>
                        @if($message=Session::get('message'))

                            <div class="alert alert-success alert-dismissible fade show">
                                {{$message}}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-lebel="close"></button>
                            </div>
                        @endif
                        <form class="row g-3" action="{{route('new.blog')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="col-12">
                                <label class="form-label"><b>Category Name</b></label>
                               <select name="category_id" required class="form-control" id="">
                                   <option value="">select category name</option>
                                   @foreach($categories as $category)
                                       <option value="{{$category->id}}">{{$category->category_name}}</option>
                                   @endforeach

                               </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label"><b>Author</b></label>

                                <select name="author_name" required class="form-control" id="">
                                    <option value="">select author name</option>
                                    @foreach($authors as $author)
                                        <option value="{{$author->id}}">{{$author->author_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label"><b>Title</b></label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label"><b>Slug</b></label>
                                <input type="text" name="slug" class="form-control">
                            </div>
                            <div class="col-12">
                                <label  class="form-label"><b>Description</b></label>
                                <textarea class="form-control" value="" name="description" id="" cols="20" rows="5"></textarea>
                            </div>

                            <div class="col-12">
                                <label class="form-label"><b>Blog Type</b></label>
                                    <select name="blog_type" id="" class="form-control">
                                        <option value="">select blog type</option>
                                        <option value="POPULAR">POPULAR</option>
                                        <option value="HISTORY">HISTORY</option>
                                        <option value="OTHER">OTHER</option>
                                    </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label"><b>Image</b></label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label"><b>Date</b></label>
                                <input type="date" name="date" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label"><b>status</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <input type="radio" name="status"  value="1">&nbsp;published
                                <input type="radio" name="status"  value="0">&nbsp;Unpublished
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
