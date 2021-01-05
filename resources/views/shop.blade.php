{{-- @include('layout.header_user') --}}
 @extends('layout.header_user')
@section('title','Shop')

@section('content')
    <main class="main-shop">
        <div class="container">
            <div class="category">
                <ul class="category-list">
                    <li class="category-item"><a href="#">Popular</a></li>
                    <li class="category-item"><a href="#">Most Sale</a></li>
                    <li class="category-item"><a href="#">Brand</a></li>
                    <li class="category-item"><a href="#">Gategory</a></li>
                    <li class="category-item"><a href="#">New Collection</a></li>
                </ul>
            </div>
            <div class="boxes-products">
              @foreach($products as $product)
                <div class="box">
                    <img class="product-image" src="{{asset(''.$product->image)}}" alt="product image">
                    <strong class="product-name">{{$product->name}}</strong>
                    <p class="product-description">{{$product->description}}</p>
                    <span class="product-brand">{{$product->brand->name}}</span>
                    <span class="product-category">{{$product->category->name}}</span>
                    <span class="product-price">{{$product->price}} LE</span>
                    <div class="product-discount">20%</div>
                    <a href="#" class="product-btn">Buy</a>
                </div>
              @endforeach
            </div>
        </div>
    </main>
@endsection
