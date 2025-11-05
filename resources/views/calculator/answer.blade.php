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
    <p class="text-center"> آزمایشگاه زبان های برنامه نویسی</p>

    <form method="get" action="{{ route('answer') }}">
        <input type="hidden" name="old" value="{{ $number }}">

        @isset($old)
            <div class="form-floating">
                <input class="form-control" id="answer" disabled value="{{ $old }} {{ $eq }} {{ $number }} = {{ $out }} ">
                <label for="answer">جواب</label>
            </div>

            @else
            <div class="form-floating">
                <input class="form-control" id="answer" disabled value="{{ $number }} {{ $eq }}">
                <label for="answer">جواب</label>
            </div>

            <div class="form-floating mt-3">
                <input type="number" class="form-control" name="number" id="number">
                <label for="number">عدد را وارد کنید</label>
            </div>
        @endisset

        @if ($eq === "*" && $old === null)
            <div class=" mt-4">
                <input class="btn btn-danger w-100 mb-2" type="submit" name="mul" value="مساوی">
            </div>
        @elseif($eq === "/" && $old === null)
            <div class=" mt-4">
                <input class="btn btn-warning w-100 mb-2" type="submit" name="div" value="مساوی">
            </div>
        @elseif($eq === "+" && $old === null)
            <div class=" mt-4">
                <input class="btn btn-success w-100 mb-2" type="submit" name="add" value="مساوی">
            </div>
        @elseif($eq === "-" && $old === null)
            <div class=" mt-4">
                <input class="btn btn-primary w-100 mb-2" type="submit" name="sub" value="مساوی">
            </div>
        @endif

    </form>

    <a class="btn btn-secondary w-100 mt-2" href="{{ route('calculator') }}">پاک کردن</a>

</main>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
