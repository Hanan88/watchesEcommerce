@extends('layout.header_user')
@section('title','Register')

@section('content')
    <main>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <input id="name" type="text" name="name" placeholder="Enter Your Name" class="@error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <input id="email" type="email" name="email" placeholder="Enter Your Email" class="@error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <input id="password" type="password" name="password" placeholder="Enter Your Password" class="form-control @error('password') is-invalid @enderror" required autocomplete="new-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <input id="password-confirm" type="password" name="password_confirmation" placeholder="Confirm Password" class="form-control" required autocomplete="new-password">

            <input id="phone" type="text" name="phone" placeholder="Enter Your Phone Number" value="{{ old('phone') }}" required autocomplete="phone">

            <button type="submit">{{ __('all.register') }}</button>
            <a href="{{ route('login') }}">{{ __('OR Login') }}</a>

            @if($errors->any())
                {{ implode('', $errors->all('<div>:message</div>')) }}
            @endif
        </form>
    </main>
@endsection
