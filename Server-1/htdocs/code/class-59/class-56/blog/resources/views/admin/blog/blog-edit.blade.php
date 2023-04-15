
@extends('admin.master')
@section('title')
    Edit blog
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class=" text-center text-uppercase">Edit Blog</h6>
                        <hr/>
                        @if($message=Session::get('message'))

                            <div class="alert alert-success alert-dismissible fade show">
                                {{$message}}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-lebel="close"></button>
                            </div>
                        @endif
                        <form class="row g-3" action="{{route('update.blog')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="blog_id" value="{{$blog->id}}">
                            <div class="col-12">
                                <label class="form-label"><b> Category Id</b></label>
                                <select name="category_id" required class="form-control" id="">

                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label"><b>Author</b></label>
                                <input type="text" name="author_name" value="{{$blog->author_name}}" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label"><b>Title</b></label>
                                <input type="text" name="title" value="{{$blog->title}}" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label"><b>Slug</b></label>
                                <input type="text" name="slug" value="{{$blog->slug}}" class="form-control">
                            </div>
                            <div class="col-12">
                                <label  class="form-label"><b>Description</b></label>
                                <textarea class="form-control"  name="description" id="" cols="20" rows="5">{{$blog->description}}</textarea>
                            </div>

                            <div class="col-12">
                                <label class="form-label"><b>Blog Type</b></label>
                                <select name="blog_type" class="form-control">
{{--                                    <option value="{{$blog->blog_type}}">{{$blog->blog_type}}</option>--}}
                                    <option value="POPULAR" {{$blog->blog_type=='POPULAR'? 'selected' : ''}}>POPULAR</option>
                                    <option value="HISTORY" {{$blog->blog_type=='HISTORY'? 'selected' : ''}}>HISTORY</option>
                                    <option value="OTHER" {{$blog->blog_type=='OTHER'? 'selected' : ''}}>OTHER</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label"><b>Image</b></label>
                                <input type="file" name="image" value="{{asset($blog->image)}}" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label"><b>Date</b></label>
                                <input type="date" name="date" value="{{$blog->date}}" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label"><b>status</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <input type="radio"  name="status" value="1" {{$blog->status==1? 'checked' : ''}}>&nbsp;published
                                <input type="radio"  name="status"  value="0" {{$blog->status==0? 'checked' : ''}}>&nbsp;Unpublished
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
