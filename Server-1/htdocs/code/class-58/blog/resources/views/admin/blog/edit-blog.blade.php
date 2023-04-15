@extends('admin.master')
@section('title')
    Edit Blog
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
                        <form class="row g-3" action="{{route('update.Blog')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$blog->id}}">
                            <div class="col-12">
                                <label class="form-label">Category Name</label>
                                <select name="category_id" id="" class="form-control">
                                    <option >Select Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}" {{$category->id == $blog->category_id?'selected':''}}>{{$category->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Author</label>
                                <input type="text" name="author_name" value="{{$blog->author_name}}" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Title</label>
                                <input type="text" name="title" value="{{$blog->title}}"  class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Slug</label>
                                <input type="text" name="slug" value="{{$blog->slug}}"  class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Description</label>
                                <textarea type="text" name="description"  class="form-control">{{$blog->description}}" </textarea>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Blog Type</label>
                                <select name="blog_type" id="" class="form-control">
                                    <option >Select Blog Type</option>
                                    <option value="popular" {{$blog->blog_type=='popular'?'selected':''}}>Popular</option>
                                    <option value="trending" {{$blog->blog_type=='trending'?'selected':''}}>Trending</option>
                                    <option value="featured" {{$blog->blog_type=='featured'?'selected':''}}>Featured</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Image</label>
                                <input type="file"   name="image" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Date</label>
                                <input type="date" value="{{$blog->date}}"  name="date" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Status</label>&nbsp;&nbsp;
                                <input type="radio" name="status" value="0" {{$blog->status==0?'checked':''}}>&nbsp;&nbsp;Unpublished&nbsp;
                                <input type="radio" name="status" value="1" {{$blog->status==1?'checked':''}}>&nbsp;&nbsp;Published
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

