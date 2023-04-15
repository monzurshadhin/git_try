@extends('admin.master')
@section('title')
    add product
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Product</h3></div>
                    <div class="card-body">
                        <form action="{{route('new.product')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-floating mb-3">
                                <input class="form-control" id="productName" type="text" name="product_name" placeholder="Enter product name" />
                                <label for="productName">Product Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="categoryName" name="category_name" type="text" placeholder="Enter category name" />
                                <label for="categoryName">Category Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="brandName" name="brand_name" type="text" placeholder="Enter brand name" />
                                <label for="brandName">Brand Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="description" name="description" type="text" placeholder="Enter description" ></textarea>
                                <label for="description">Description</label>
                            </div>
                            <div class="mb-3">
                                <input class="form-control" id="image" name="image" type="file"  />
                            </div>

                            <div class="mt-4 mb-0">
                                <input class="btn btn-primary" name="submit" type="submit"/>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

