@extends('layout.header_admin')
@section('title', 'Add Category')

@section('content')
    <main>
        <form action="{{route('add_category')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="text" name="categoryName" id="" placeholder="Enter Category Name">
            <button class="btn addBrandBtn" type="submit">Add Category</button>
        </form>

    </main>
@endsection
