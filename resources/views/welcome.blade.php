@extends('layouts.app')

@section('content')
    <div class="text-center">
        <p class="h3">
            کارگزاری املاک جرقه
        </p>

        <p class="mt-5">
            خرید، فروش، رهن و اجاره
            <br>
            برای استفاده از سایت لطفا وارد سیستم شوید
        </p>

        <a class="mt-5 btn btn-bd-primary" href="{{ route('login') }}">ورود به سیستم</a>
    </div>
@endsection

