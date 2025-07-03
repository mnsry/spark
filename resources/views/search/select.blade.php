@extends('layouts.panel')
@section('content')
    <div class="pt-2 text-center">
        <h2 class="text-primary">{{ $category_select->name }}</h2>
        <p class="lead py-2">جزییات جستجو...</p>
    </div>
    <form action="{{ route('search.find') }}" method="POST">
        @csrf
        <div class="form-floating">
            <select class="form-select" id="category" name="category_id">
                @foreach($category_select->childes as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            <label for="category">انتخاب ملک</label>
        </div>

{{--        <div class="form-floating mt-3">--}}
{{--            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"--}}
{{--                   name="name" value="{{ old('name') }}" placeholder="name">--}}
{{--            <label for="name">قیمت</label>--}}
{{--            @error('name')--}}
{{--            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>--}}
{{--            @enderror--}}
{{--        </div>--}}

        <button class="btn btn-primary w-100 mt-4" type="submit">بعدی</button>
    </form>
    <br><br>
@endsection
