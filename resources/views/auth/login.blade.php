{{-- @include('layout.header_user') --}}
@extends('layout.header_user')
@section('title','Login')

@section('content')
    <main>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <input type="email" name="email" placeholder="Enter your Email" class="@error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <input type="password" name="password" placeholder="Enter your Password"class="@error('password') is-invalid @enderror" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <button type="submit">{{__('Login')}}</button>
            <a href="{{ route('register') }}">{{ __('OR Create Account') }}</a>
        </form>
    </main>
@endsection
