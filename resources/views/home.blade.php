@extends('layouts.panel')

@section('content')


    <div class="bg-body-tertiary p-5 rounded mt-3">
        <h1>فایل ها موجود</h1>
{{--        <p> آخرین فایل » {{ $filesLast->created_at->diffForHumans() }} </p>--}}
        <a class="btn btn-lg btn-primary" href="{{ route('file.index') }}" role="button">تعداد » {{ $filesCount }} </a>
    </div>

    <div class="bg-body-tertiary p-5 rounded mt-3">
        <h1>کاربران</h1>
        <p> ثبت نام آخرین کاربر »  {{ $usersLast->created_at->diffForHumans() }} | {{ $usersLast->name }}</p>
        <a class="btn btn-lg btn-primary" href="{{ route('user') }}" role="button">تعداد » {{ $usersCount }}</a>
    </div>
@endsection
