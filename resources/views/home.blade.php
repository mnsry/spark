@extends('layouts.panel')

@section('content')

    <div class="bg-body-tertiary p-5 rounded mt-3">
        <h1>فایل های موجود</h1>
        <p> آخرین فایل » {{ $filesLast->created_at->diffForHumans() }} </p>
        <a class="btn btn-lg btn-primary" href="{{ route('file.index') }}" role="button">تعداد » {{ $filesCount }} </a>
    </div>

    <div class="bg-body-tertiary p-5 rounded mt-3">
        <h1>کاربران سایت</h1>
        <p> آخرین کاربر »  {{ $usersLast->created_at->diffForHumans() }} | {{ $usersLast->name }} |  {{ $usersLast->mobile }}</p>
        <a class="btn btn-lg btn-primary" href="{{ route('user') }}" role="button">تعداد » {{ $usersCount }}</a>
    </div>
@endsection
