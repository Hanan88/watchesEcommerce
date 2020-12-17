@extends('layout.header_admin')
@section('title', 'Product')

@section('content')

    <main>
        <table class="viewTable">
            <tr>
                <th>Product id</th>
                <th>Product name</th>
                <th>Product description</th>
                <th>Product price</th>
                <th>Product quantity</th>
                <th>Product logo</th>
                <th>Control</th>
            </tr>
            @foreach($products as $product)
            <tr>
                <th>{{$product->id}}</th>
                <th>{{$product->name}}</th>
                <th>{{$product->description}}</th>
                <th>{{$product->price}}</th>
                <th>{{$product->quantity}}</th>
                <th><img src="{{asset(''.$product->image)}}" alt="Piaget Logo"></th>
                <th>
                    <a class="editBtn" href="{{route('view_edit_product', $product->id)}}">Edit</a>
                    <a class="deleteBtn" href="{{route('delete_product', $product->id)}}">Delete</a>
                </th>
            </tr>
            @endforeach
        </table>
        <a class="addBtn" href="{{route('view_product')}}">Add New product</a>
    </main>
@endsection
