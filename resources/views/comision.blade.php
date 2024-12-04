@extends('layouts.panel')

@section('content')
    <img src="{{ asset('images/comision/c01.jpg') }}" class="rounded w-100 mb-3" alt="{{ Auth::user()->name }}">
    <br>
    <img src="{{ asset('images/comision/c02.jpg') }}" class="rounded w-100 mb-3" alt="{{ Auth::user()->name }}">
    <br>
    <img src="{{ asset('images/comision/c03.jpg') }}" class="rounded w-100 mb-3" alt="{{ Auth::user()->name }}">
    <br>

@endsection
