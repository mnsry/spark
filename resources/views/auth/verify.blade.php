@extends('layouts.app')

@section('content')

    <a class="btn w-100" href="{{ route('welcome') }}">کارگزاری املاک جرقه</a>

    @if (session('resent'))
        <div class="mt-3 alert alert-success" role="alert">
            {{ __('A fresh verification link has been sent to your email address.') }}
        </div>
    @endif

    <div class="mt-3 alert alert-success" role="alert">
        <div class="card text-center">
            <div class="card-header">تایید حساب</div>
            <div class="card-body">
                برای ادامه باید حساب خود را تایید کنید لینکی به ایمیل شما فرستاده می شود لطفا انرا تایید کنید
            </div>
        </div>
    </div>

    <form class="d-inline" method="POST" action="{{ route('verification.send') }}">
        @csrf
        <button class="btn btn-primary w-100 mb-3" type="submit">ارسال لینک</button>
    </form>

@endsection

