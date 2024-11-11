@extends('layouts.panel')
@section('content')
    <div class="pt-2 text-center">
        <h2 class="text-primary">{{ $category_select->name }}</h2>
        <p class="lead py-2">ثبت نوع ملک و نام کاربر</p>
    </div>

    <form action="{{ route('file.create') }}">

        <div class="form-floating">
            <select class="form-select" id="category" name="category_id">
                @foreach($category_select->childes as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            <label for="category">انتخاب ملک</label>
        </div>

        <div class="form-floating mt-3">
            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror"
                   name="username" value="{{ old('username') }}"  placeholder="username">
            <label for="username">نام و نام خانوادگی</label>
            @error('username')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        </div>

        <div class="form-floating mt-3">
            <input id="mobile" type="number" class="form-control @error('mobile') is-invalid @enderror"
                   name="mobile" value="{{ old('mobile') }}" placeholder="09123456789">
            <label for="mobile" >شماره موبایل</label>
            @error('mobile')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        </div>

        <button class="btn btn-primary w-100 mt-4" type="submit">بعدی</button>
    </form>
    <br><br>
@endsection
