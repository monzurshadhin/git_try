@extends('dashboard.master')
@section('title')
    Update Purchase Order
@endsection
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Purchase Create</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active"><a href="{{route('purchase.order')}}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="{{route('purchase.list')}}">purchase</a></li>
            <li class="breadcrumb-item active">purchase create</li>
        </ol>
        <form class="row g-3" action="{{route('save.order')}}" method="POST">
            @csrf
            <div class="row form-card">
                <div class="col-md-6">
                    <label for="vendor" class="form-label">Vendor</label>
                    <select id="vendor" name="vendor_id" class="form-select" required>
                        <option selected disabled>Select vendor</option>
                        @foreach($vendors as $vendor)
                            <option value="{{$vendor->id}}" {{$order->verdor_id==$vendor->id?'selected':''}}>{{$vendor->vendor_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="warehouse" class="form-label">Warehouse</label>
                    <select id="warehouse" name="warehouse_id" class="form-select" required>
                        <option selected disabled>Select warehouse</option>
                        @foreach($wareHouses as $wareHouse)
                            <option value="{{$wareHouse->id}}">{{$wareHouse->ware_house_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="category" class="form-label">Category</label>
                    <select id="category" name="category_id" class="form-select" required>
                        <option selected disabled>Select category</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">

                </div>
                <div class="col-md-3">
                    <label for="date" class="form-label">Purchase Date</label>
                    <input type="date" name="purchase_date" class="form-control" id="date" required>
                </div>
                <div class="col-md-3">
                    <label for="purchase_number" class="form-label">Purchase Number</label>
                    <input type="text" name="purchase_number" readonly value="#PUR{{rand()}}" class="form-control" id="purchase_number">
                </div>
            </div>
            <h5 class="ps-0 my-4">Product & Services</h5>
            <div class="row form-card">
                <div class="col-md-3">
                    <label for="items" class="form-label">ITEMS</label>
                    <select id="item" name="item_id" class="form-select" required>
                        <option selected disabled>Select items</option>
                        @foreach($items as $item)
                            <option value="{{$item->id}}">{{$item->item_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="quantity" class="form-label">QUANTITY</label>
                    <input type="number" name="quantity" min="0" max="5" class="form-control" id="quantity" required>
                </div>
                <div class="col-md-2">
                    <label for="price" class="form-label" >PRICE</label>
                    <input type="number" name="price" class="form-control" id="item_price" readonly>
                </div>
                <div class="col-md-1">
                    <label for="tax" class="form-label">TAX (%)</label>
                    <h6 class="tax" id="tax"></h6>
                </div>
                <div class="col-md-2">
                    <label for="discount" class="form-label" >DISCOUNT</label>
                    <input type="number" name="discount" class="form-control" readonly id="discount">
                </div>
                <div class="col-md-1">
                    <label class="form-label">AMOUNT</label>
                    <p class="small-text">BEFORE TAX & DISCOUNT</p>
                    <h6 id="before_amount"></h6>
                </div>
                <div class="col-md-6 mb-5">

                    <textarea type="text" name="description" placeholder="Description" class="form-control" id="description"></textarea>
                </div>
                <hr>
                <div class="col-md-9"></div>
                <div class="col-md-3">
                    <div class="row">
                        <div class="col-8 text-center">Sub Total (৳)</div>
                        <div class="col-4 text-center" id="sub_total">0.00</div>
                    </div>
                </div>
                <hr>
                <div class="col-md-9"></div>
                <div class="col-md-3">
                    <div class="row">
                        <div class="col-8 text-center">Discount (৳)</div>
                        <div class="col-4 text-center" id="discount_price">0.00</div>
                    </div>
                </div>
                <hr>
                <div class="col-md-9"></div>
                <div class="col-md-3">
                    <div class="row">
                        <div class="col-8 text-center">Tax (৳)</div>
                        <div class="col-4 text-center" id="tax_price">0.00</div>
                    </div>
                </div>
                <hr>
                <div class="col-md-9"></div>
                <div class="col-md-3">
                    <div class="row">
                        <div class="col-8 text-center">Total Amount (৳)</div>
                        <div class="col-4 text-center" id="total_amount">0.00</div>
                    </div>
                </div>
                <hr>

            </div>
            <div class="col-12 d-flex justify-content-end">
                <a href="{{route('purchase.order')}}" class="btn  me-4 cancel-btn">Cancel</a>
                <button type="submit" class="btn create-btn">Create</button>
            </div>

        </form>


    </div>
    <script>
        $(document).ready(function () {
            $('#item').change(function () {

                var url = '/get-item/'+$(this).val();
                axios.get(url).then((res)=>{
                    // console.log(res.data.price)

                    document.getElementById("item_price").value = res.data.price;
                    document.getElementById("tax").innerText = res.data.tax+'%';
                    document.getElementById("discount").value = res.data.discount;

                    if(document.getElementById('quantity').value==0){
                        document.getElementById("before_amount").innerText = 0.0;
                        document.getElementById("sub_total").innerText = 0.0;
                        document.getElementById("discount_price").innerText = 0.0;
                        document.getElementById("tax_price").innerText = 0.0;
                        document.getElementById("total_amount").innerText = 0.0;
                    }
                    else{
                        document.getElementById("before_amount").innerText = document.getElementById('quantity').value * document.getElementById('item_price').value+ '৳';
                        document.getElementById("sub_total").innerText = document.getElementById('quantity').value * document.getElementById('item_price').value;
                        document.getElementById("discount_price").innerText = document.getElementById("discount").value;
                        document.getElementById("tax_price").innerText = (document.getElementById('quantity').value *document.getElementById('item_price').value*parseInt(document.getElementById("tax").innerText))/100;
                        document.getElementById("total_amount").innerText = (document.getElementById('quantity').value * document.getElementById('item_price').value)-document.getElementById("discount").value + parseInt(document.getElementById("tax_price").innerText);
                    }
                });
            });
            $('#quantity').change(function () {
                if(document.getElementById('quantity').value==0){
                    document.getElementById("before_amount").innerText = 0.0;
                    document.getElementById("sub_total").innerText = 0.0;
                    document.getElementById("discount_price").innerText = 0.0;
                    document.getElementById("tax_price").innerText = 0.0;
                    document.getElementById("total_amount").innerText = 0.0;
                }
                else {
                    document.getElementById("before_amount").innerText = document.getElementById('quantity').value * document.getElementById('item_price').value + '৳';
                    document.getElementById("sub_total").innerText = document.getElementById('quantity').value * document.getElementById('item_price').value;
                    document.getElementById("discount_price").innerText = document.getElementById("discount").value;
                    document.getElementById("tax_price").innerText = (document.getElementById('quantity').value * document.getElementById('item_price').value * parseInt(document.getElementById("tax").innerText)) / 100;
                    document.getElementById("total_amount").innerText = (document.getElementById('quantity').value * document.getElementById('item_price').value) - document.getElementById("discount").value + parseInt(document.getElementById("tax_price").innerText);
                }
            });

        })
    </script>
@endsection
