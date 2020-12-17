@extends('layout.header_admin')
@section('title', 'Edit Product')

@section('content')
    <main>
        <form action="{{route('update_product',$product->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="text" name="productName" value="{{$product->name}}" placeholder="Enter Product Name">
            <input type="text" name="productDescription" value="{{$product->description}}" placeholder="Enter Product Description">
            <input type="text" name="productPrice" value="{{$product->price}}" placeholder="Enter Product Price">
            <input type="text" name="productQuantity" value="{{$product->quantity}}" placeholder="Enter Product Quantity">
            <input type="file" name="productimage" id="" placeholder="Select Product Page">
            <img src="{{asset($product->image)}}" alt="">
            <button class="btn addProductBtn" type="submit">Edit Product</button>
        </form>

    </main>
@endsection
