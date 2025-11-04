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
    <a class=" btn w-100" href="{{ route('welcome') }}"> آزمایشگاه زبان های برنامه نویسی</a>

    <form class="mt-4" method="get" action="{{ route('calculator') }}">

        <div class="form-floating">
            <input id="number1" type="number" class="form-control @error('number1') is-invalid @enderror"
                   name="number1" value="{{ old('number1') }}" placeholder="1~9">
            <label for="number1">عدد را وارد کنید</label>
            @error('number1')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <button class="btn btn-primary w-25 mb-3" type="submit"> ضرب </button>
        <button class="btn btn-primary w-25 mb-3" type="submit"> تقسیم </button>
        <button class="btn btn-primary w-25 mb-3" type="submit"> جمع </button>
        <button class="btn btn-primary w-25 mb-3" type="submit"> تفریق </button>


        <div class="form-floating mt-1">
            <input type="number" class="form-control @error('number2') is-invalid @enderror" id="number2"
                   name="number2" placeholder="Answer" disabled>
            <label for="number2">جواب</label>
        </div>

    </form>

</main>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
