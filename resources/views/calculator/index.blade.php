<!doctype html>
<html lang="fa" data-bs-theme="auto">
<head>
    <script src="{{ asset('js/color-modes.js') }}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="ماشین حساب">
    <meta name="author" content="مسعود منصوری">
    <meta name="generator" content="مسعود منصوری">
    <title>ماشین حساب</title>

    <link href="{{ asset('css/css@3.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.rtl.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sign-in.css') }}" rel="stylesheet">

    @laravelPWA
</head>
<body class="d-flex align-items-center py-4 bg-body-tertiary">

<main class="form-signin w-100 m-auto">
    <a class=" btn w-100" href="{{ route('welcome') }}">کارگزاری املاک جرقه</a>

    <form class="mt-4" method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-floating">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                   name="email" value="{{ old('email') }}" placeholder="name@example.com">
            <label for="email">آدرس ایمیل</label>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form-floating mt-1">
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                   name="password" placeholder="Password">
            <label for="password">گذرواژه</label>
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form-check text-start my-3">
            <input class="form-check-input" type="checkbox" name="remember" value="remember-me"
                   id="flexCheckDefault" {{ old('remember') ? 'checked' : '' }} >
            <label class="form-check-label" for="flexCheckDefault">
                مرا بیاد داشته باش
            </label>
        </div>

        <button class="btn btn-primary w-100 mb-3" type="submit" onclick="this.disabled=true;this.form.submit();">ورود</button>

    </form>

    <a class="btn w-100" href="{{ route('password.request') }}">گذرواژه ام را فراموش کردم</a>
    <a class="btn w-100" href="{{ route('register') }}">ایجاد یک حساب جدید</a>

</main>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
