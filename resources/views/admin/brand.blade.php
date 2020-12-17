@extends('layout.header_admin')
@section('title', 'Brand')

@section('content')

    <main>
        <table class="viewTable">
            <tr>
                <th>Brand id</th>
                <th>Brand name</th>
                <th>Brand logo</th>
                <th>Control</th>
            </tr>
            @foreach($brands as $brand)
            <tr>
                <th>{{$brand->id}}</th>
                <th>{{$brand->name}}</th>
                <th><img src="{{asset(''.$brand->image)}}" alt="Piaget Logo"></th>
                <th>
                    <a class="editBtn" href="{{route('view_edit_brand', $brand->id)}}">Edit</a>
                    <a class="deleteBtn" href="{{route('delete_brand', $brand->id)}}">Delete</a>
                </th>
            </tr>
            @endforeach
        </table>
        <a class="addBtn" href="{{route('view_brand')}}">Add New Brand</a>
    </main>
@endsection
