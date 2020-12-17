@extends('layout.header_admin')
@section('title', 'Edit Category')

@section('content')
    <main>
        <form action="{{route('update_category',$category->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="text" name="categoryName" value="{{$category->name}}" placeholder="Enter category Name">
            <button class="btn addBrandBtn" type="submit">Edit Category</button>
        </form>

    </main>
@endsection
