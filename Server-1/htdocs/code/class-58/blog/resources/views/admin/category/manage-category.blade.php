@extends('admin.master')
@section('title')
    Manage Category
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase">Category Table</h6>
                        <hr/>
                       <table class="table table-hover table-bordered table-striped text-center" style="vertical-align: middle">
                           <tr >
                               <th>SL</th>
                               <th>Category Name</th>
                               <th>Image</th>
                               <th>Status</th>
                               <th>Action</th>
                           </tr>
                           @php $i=1 @endphp
                           @foreach($categories as $category)
                           <tr>
                               <td>{{$i++}}</td>
                               <td>{{$category->category_name}}</td>
                               <td><img src="{{asset($category->image)}}" class="img-fluid" height="50px" width="50px" alt=""></td>
                               <td style="color: {{$category->status == 1 ? 'green': '#FECF8C'}}"><b>{{$category->status == 1 ? 'published': 'unpublished'}}</b></td>
                               <td class="">
{{--                                   <a href="{{route('edit.category',['c_id'=>$category->id])}}" class="btn btn-primary">Edit</a>--}}
{{--                                   @if($category->status == 1)--}}
{{--                                   <a href="" class="btn btn-warning">Published</a>--}}
{{--                                   @else--}}
{{--                                   <a href="" class="btn btn-success">Unpublished</a>--}}
{{--                                   @endif--}}
{{--                                   <form action="">--}}
{{--                                       <input type="submit" class="btn btn-danger" onclick="return confirm('are you sure to delete!!')" value="Delete">--}}
{{--                                   </form>--}}
                                   <div class="btn-group h-100">

                                       <a href="{{route('edit.category',['c_id'=>$category->id])}}"><i class="bi bi-pencil-square text-primary btn" data-toggle="tooltip" data-placement="top" title="Edit" style="font-size: 20px;cursor: pointer"></i></a>
                                   @if($category->status == 1)
                                           <a href="{{route('update.status',['c_id'=>$category->id])}}"><i class="bi bi-check2-circle text-success btn" data-toggle="tooltip" data-placement="top" title="Unpublish" style="font-size: 20px;margin-left: 5px;cursor: pointer"></i></a>
                                       @else
                                           <a href="{{route('update.status',['c_id'=>$category->id])}}"><i class="bi bi-check2-circle text-warning btn" data-toggle="tooltip" data-placement="top" title="Publish" style="font-size: 20px;margin-left: 5px;cursor: pointer"></i></a>

                                       @endif
                                       <form action="{{route('delete.category')}}" method="post">
                                           @csrf
                                           <input type="hidden" name="category_id" value="{{$category->id}}">
                                           <button onclick="return confirm('are you sure to delete!!')" type="submit" style="border: none;background: none"><i class="bi bi-trash-fill text-danger btn" data-toggle="tooltip" data-placement="top" title="Delete" style="font-size: 20px;margin-left: 5px;cursor: pointer"></i></button>
                                       </form>
                                   </div>
                               </td>
                           </tr>
                           @endforeach
                       </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
