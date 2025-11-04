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
    <p class="text-center" href=#> آزمایشگاه زبان های برنامه نویسی</p>

    <form class="mt-4" method="get" action="{{ route('calculator') }}">

        <div class="form-floating">
            <input id="number" type="number" class="form-control @error('number') is-invalid @enderror"
                   name="number" value="{{ old('number') }}" placeholder="1~9">
            <label for="number">عدد را وارد کنید</label>
            @error('number')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class=" mt-4">
            <input class="btn btn-danger w-100 mb-3" type="submit" value="*">
            <input class="btn btn-warning w-100 mb-3" type="submit" value="/">
            <input class="btn btn-success w-100 mb-3" type="submit" value="+">
            <input class="btn btn-primary w-100 mb-3" type="submit" value="-">
        </div>



        <div class="form-floating mt-1">
            <input type="number" class="form-control" id="answer"
                   name="answer" placeholder="Answer" disabled>
            <label for="answer">جواب</label>
        </div>

    </form>

</main>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
