@extends('admin.master')
@section('title')
    Manage Blog
@endsection
@section('content')
    <div class="row">
        <div class="col-lx-12">
            <div class="card ">
                <div class="card-body">
                    <h6 class=" text-center text-uppercase"> Blog Table </h6>
                                <hr/>
                    <div class=" table-responsive">
                        <table id="example2" class="table table-hover table-bordered table-striped">

                            <thead>
                               <tr>
                                <th>sl</th>
                                <th>Category Id</th>
                                <th>Author</th>
                                <th>Title</th>
                                <th>Slug</th>
                                <th>Description</th>
                                <th>Blog Type</th>
                                <th>Image</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Action</th>
                               </tr>

                            </thead>


                            <tbody>
                                @php $i=1; @endphp
                                @foreach($blogs as $blog)
                                <tr>
                                    <td>{{$i++}}</td>
{{--                                    <td>{{$blog->category_id}}</td> //change Blog::all()--}}
                                    <td>{{$blog->category_name}}</td>
                                    <td>{{$blog->author_name}}</td>
                                    <td>{{$blog->title}}</td>
                                    <td>{{$blog->slug}}</td>
                                    <td>{{substr($blog->description,0,100)}}</td>
                                    <td>{{$blog->blog_type}}</td>
                                    <td><img src="{{asset($blog->image)}}" class="img-fluid" style="height:50px; width:50px;"></td>
                                    <td>{{$blog->date}}</td>
                                    <td>{{$blog->status}}</td>
                                    <td class="d-flex">
                                        <a href="{{route('edit.blog',['blog_id'=>$blog->id])}}" class="btn btn-primary mx-2">edit</a>
                                        @if($blog->status==1)
                                            <a href="{{route('update.blogStatus',['blog_id'=>$blog->id])}}" class="btn btn-warning">&nbsp;unPublished</a>
                                        @else
                                            <a href="{{route('update.blogStatus',['blog_id'=>$blog->id])}}" class="btn btn-success mx-2">&nbsp;Published</a>
                                        @endif
                                        <form action="{{route('delete.blog')}}" method="POST">
                                            @csrf
                                            <input type="hidden" name="blog_id" value="{{$blog->id}}">

                                            <button class="btn btn-danger mx-2"  onclick="return confirm('are you sure for delete')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
