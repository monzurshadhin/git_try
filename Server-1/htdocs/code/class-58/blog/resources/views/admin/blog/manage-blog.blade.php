@extends('admin.master')
@section('title')
    Manage Blog
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-0 text-uppercase">Blog Table</h6>
                    <hr/>
                    <div class="border p-3 rounded table-responsive">

                        <table id="example" class="table table-hover table-bordered table-striped text-center" style="vertical-align: middle">
                            <thead>
                                <tr >
                                    <th>SL</th>
                                    <th>Category</th>
                                    <th>Author</th>
                                    <th>Title</th>
{{--                                    <th>Slug</th>--}}
{{--                                    <th>Description</th>--}}
                                    <th>Blog Type</th>
                                    <th>Image</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i=1 @endphp
                                @foreach($blogs as $blog)

                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$blog->category_name}}</td>
                                        <td>{{$blog->author_name}}</td>
                                        <td>{{$blog->title}}</td>
{{--                                        <td>{{$blog->slug}}</td>--}}
{{--                                        <td>{{$blog->description}}</td>--}}
                                        <td>{{$blog->blog_type}}</td>
                                        <td><img src="{{asset($blog->image)}}" width="60px" height="60px" alt=""></td>
                                        <td>{{$blog->date}}</td>
                                        <td style="color: {{$blog->status == 1 ? 'green': '#FECF8C'}}"><b>{{$blog->status==1?'Published':'Unpublished'}}</b></td>
                                        <td >
                                            <div class="btn-group h-100">

                                                <a href="{{route('edit.blog',['b_id'=>$blog->id])}}"><i class="bi bi-pencil-square text-primary btn" data-toggle="tooltip" data-placement="top" title="Edit" style="font-size: 20px;cursor: pointer"></i></a>
                                                @if($blog->status == 1)
                                                    <a href="{{route('update.blogStatus',['b_id'=>$blog->id])}}"><i class="bi bi-check2-circle text-success btn" data-toggle="tooltip" data-placement="top" title="Unpublish" style="font-size: 20px;margin-left: 5px;cursor: pointer"></i></a>
                                                @else
                                                    <a href="{{route('update.blogStatus',['b_id'=>$blog->id])}}"><i class="bi bi-check2-circle text-warning btn" data-toggle="tooltip" data-placement="top" title="Publish" style="font-size: 20px;margin-left: 5px;cursor: pointer"></i></a>

                                                @endif
                                                <form action="{{route('delete.blog')}}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="blog_id" value="{{$blog->id}}">
                                                    <button type="submit" onclick="return confirm('are you sure to delete!!')" style="border: none;background: none"><i class="bi bi-trash-fill text-danger btn" data-toggle="tooltip" data-placement="top" title="Delete" style="font-size: 20px;margin-left: 5px;cursor: pointer"></i></button>
                                                </form>
                                            </div>

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
