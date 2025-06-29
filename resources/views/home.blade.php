@extends('layouts.panel')

@section('content')
    <img src="{{ asset('images/banner/01.jpg') }}" class="img-thumbnail rounded w-100 mb-3" alt="{{ Auth::user()->name }}">

    <div class="d-flex">
        <img src="{{ asset('images/users/01.jpg') }}" class="img-thumbnail rounded  w-50 mb-3" alt="{{ Auth::user()->name }}">
        <img src="{{ asset('images/users/02.jpg') }}" class="img-thumbnail rounded w-50 mb-3" alt="{{ Auth::user()->name }}">
    </div>

    <div class="bg-body-tertiary p-5 rounded mt-3">
        <h1>فایل های موجود</h1>
{{--        <p> آخرین فایل » {{ $filesLast->created_at->diffForHumans() }} </p>--}}
        <a class="btn btn-lg btn-primary" href="{{ route('file.index') }}" role="button">تعداد » {{ $filesCount }} </a>
    </div>

    <div class="bg-body-tertiary p-5 rounded mt-3">
        <h1>کاربران سایت</h1>
        <p> آخرین کاربر »  {{ $usersLast->created_at->diffForHumans() }} | {{ $usersLast->name }} |  {{ $usersLast->mobile }}</p>
        <a class="btn btn-lg btn-primary" href="{{ route('user') }}" role="button">تعداد » {{ $usersCount }}</a>
    </div>
@endsection
