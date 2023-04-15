@extends('admin.master')
@section('title')
    Manage Category
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h6 class=" text-center text-uppercase"> Category Table </h6>
                    <hr/>
                    <div class="table-responsive">

                       <table id="example" class="table table-hover table-bordered table-striped">

                           <thead>
                           <tr>
                             <th>sl</th>
                             <th>Category Name</th>
                             <th>Image</th>
                             <th>Status</th>
                             <th>Action</th>
                           </tr>

                           </thead>


                           <tbody>
                           @php $i=1; @endphp
                           @foreach($categories as $category)
                           <tr>
                           <td>{{$i++}}</td>
                           <td>{{$category->category_name}}</td>
                           <td><img src="{{asset($category->image)}}" class="img-fluid" style="height:50px; width:50px;"></td>
                           <td>{{$category->status==1? 'published':'unpublished'}}</td>
                           <td class="d-flex">
                               <a href="{{route('edit.category',['category_id'=>$category->id])}}" class="btn btn-primary mx-2">edit</a>

                               @if($category->status==1)
                                   <a href="{{route('update.categoryStatus',['category_id'=>$category->id])}}" class="btn btn-warning">&nbsp;unPublished</a>
                               @else
                                   <a href="{{route('update.categoryStatus',['category_id'=>$category->id])}}" class="btn btn-success mx-2">&nbsp;Published</a>
                                   @endif
                               <form action="{{route('delete.category')}}" method="POST">
                                   @csrf
                                   <input type="hidden" name="category_id" value="{{$category->id}}">

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
