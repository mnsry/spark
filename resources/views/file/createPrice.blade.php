@extends('layouts.panel')
@section('content')
    <div class="py-4 text-center">
        <h2 class="text-primary"> {{ $category_select->parent->name }} - {{ $category_select->name }} </h2>
        <p class="lead pt-4">قیمت گذاری</p>
    </div>
    <form action="{{ route('file.create.change') }}">
        <input type="hidden" name="category_id" value="{{ $category_select->id }}" />

        <div class="mt-5 d-flex">
            <button class="btn btn-primary w-50 mx-2 " type="submit">بعدی</button>
            <a class="btn btn-warning w-50 mx-2" href="{{ url()->previous() }}">قبلی</a>
        </div>
    </form>
    <br><br>
@endsection
