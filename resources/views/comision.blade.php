@extends('layouts.panel')

@section('content')
    <img src="{{ asset('images/banner/01.jpg') }}" class="img-thumbnail rounded w-100 mb-3" alt="{{ Auth::user()->name }}">

    <div class="d-flex">
        <img src="{{ asset('images/users/01.jpg') }}" class="img-thumbnail rounded  w-50 mb-3" alt="{{ Auth::user()->name }}">
        <img src="{{ asset('images/users/02.jpg') }}" class="img-thumbnail rounded w-50 mb-3" alt="{{ Auth::user()->name }}">
    </div>

    <img src="{{ asset('images/comision/c01.jpg') }}" class="rounded w-100 mb-3" alt="{{ Auth::user()->name }}">
    <br>

    <img src="{{ asset('images/comision/c02.jpg') }}" class="rounded w-100 mb-3" alt="{{ Auth::user()->name }}">
    <br>

    <img src="{{ asset('images/comision/c03.jpg') }}" class="rounded w-100 mb-3" alt="{{ Auth::user()->name }}">
    <br>

@endsection
