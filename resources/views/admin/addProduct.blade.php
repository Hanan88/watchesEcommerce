@extends('layout.header_admin')
@section('title', 'Add Product')

@section('content')
    <main>
        <form action="{{route('add_product')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="text" name="productName" id="" placeholder="Enter Product Name">
            <input type="text" name="productDescription" id="" placeholder="Enter Product Description">
            <input type="text" name="productPrice" id="" placeholder="Enter Product Price">
            <input type="text" name="productQuantity" id="" placeholder="Enter Product Quantity">
            <input type="text" name="productBrand" id="" placeholder="Enter Product Brand">
            <input type="text" name="productCategory" id="" placeholder="Enter Product Category">
            <input type="file" name="productimage" id="" placeholder="Select Product image">
            <button class="btn addBrandBtn" type="submit">Add Product</button>
        </form>

    </main>
@endsection
