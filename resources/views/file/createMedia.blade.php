@extends('layouts.panel')
@section('content')
    <div class="py-4 text-center">
        <h2 class="text-primary"> {{ $category_select->parent->name }} - {{ $category_select->name }} </h2>
        <p class="lead pt-4">توضیحات تکمیلی و آپلود فایل</p>
    </div>
    <form action="{{ route('file.store') }}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="category_id" value="{{ $category_select->id }}" />

        <button class="btn btn-primary w-100 mt-5" type="submit">ثبت</button>
    </form>
    <br><br>
@endsection
