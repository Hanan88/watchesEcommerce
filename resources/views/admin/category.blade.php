@extends('layout.header_admin')
@section('title', 'Category')

@section('content')
    <main>
        <table class="viewTable">
            <tr>
                <th>Category id</th>
                <th>Category name</th>
                <th>Control</th>
            </tr>
            @foreach($categories as $category)
            <tr>
                <th>{{$category->id}}</th>
                <th>{{$category->name}}</th>
                <th>
                    <a class="editBtn" href="{{route('view_edit_category', $category->id)}}">Edit</a>
                    <a class="deleteBtn" href="{{route('delete_category', $category->id)}}">Delete</a>
                </th>
            </tr>
            @endforeach
        </table>
        <a class="addBtn" href="{{route('view_category')}}">Add New Category</a>
    </main>
@endsection
