@extends('layout.header_admin')
@section('title', 'Add Brand')

@section('content')
    <main>
        <form action="{{route('add_brand')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="text" name="brandName" id="" placeholder="Enter Brand Name">
            <input type="file" name="brandimage" id="" placeholder="Select Brand Page">
            <button class="btn addBrandBtn" type="submit">Add Brand</button>
        </form>

    </main>
@endsection
