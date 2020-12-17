@extends('layout.header_user')
@section('title','Watches eCommerce')

@section('content')
    <main>
        <div class="container">
            <div class="left-side">
                <h4>{{__('all.are_you_ready_for')}}</h4>
                <h2>{{__('all.new_collection')}}</h2>
                <button>{{__('all.shop_now')}}</button>
            </div>
            <div class="right-side">
                <img src="images/watch.png" alt="Product images">
            </div>
        </div>
    </main>
@endsection

