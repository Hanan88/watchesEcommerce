@extends('layout.header_admin')
@section('title', 'Edit Brand')

@section('content')
    <main>
        <form action="{{route('update_brand',$brand->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="text" name="brandName" value="{{$brand->name}}" placeholder="Enter Brand Name">
            <input type="file" name="brandimage" id="" placeholder="Select Brand Page">
            <img src="{{asset($brand->image)}}" alt="">
            <button class="btn addBrandBtn" type="submit">Edit Brand</button>
        </form>

    </main>
@endsection
