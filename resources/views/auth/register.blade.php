@extends('layouts.app')

@section('content')
    <a class=" btn w-100" href="{{ route('welcome') }}">کارگزاری املاک جرقه</a>

    <form class="mt-4" method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-floating">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                   name="name" value="{{ old('name') }}"  placeholder="name">
            <label for="name">نام و نام خانوادگی</label>

            @error('name')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>

        <div class="form-floating mt-1">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                   name="email" value="{{ old('email') }}" placeholder="name@example.com">
            <label for="email" >آدرس ایمیل</label>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

        <div class="form-floating mt-1">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                   name="password" placeholder="Password">
            <label for="password">گذروازه</label>

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>

        <div class="form-floating mt-1">
            <input id="password-confirm" type="password" class="form-control"
                   name="password_confirmation" placeholder="New-Password">
            <label for="password-confirm">تکرار گذرواژه</label>
        </div>

        <button class="btn btn-primary w-100 mt-1" type="submit">ثبت نام</button>

    </form>
    <a class="btn w-100 mt-4" href="{{ route('login') }}">ورود به حساب قبلی</a>
@endsection
