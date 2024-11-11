@extends('layouts.panel')
@section('content')
    <div class="py-4 text-center">
        <h2 class="text-primary"> {{ $category_select->parent->name }} - {{ $category_select->name }} </h2>
        <p class="lead pt-4">اطلاعات کاربر</p>
    </div>
    <form action="{{ route('file.create.loc') }}">
        <input type="hidden" name="category_id" value="{{ $category_select->id }}" />
        <button class="btn btn-success w-100 mx-2 " type="submit">با نام کاربری من ثبت کن</button>
    </form>

    <form action="{{ route('file.create.loc') }}">
        <input type="hidden" name="category_id" value="{{ $category_select->id }}" />

        <div class="form-floating mt-4">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                   name="name" value="{{ old('name') }}"  placeholder="name">
            <label for="name">نام و نام خانوادگی</label>
            @error('name')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        </div>

        <div class="form-floating mt-4">
            <input id="mobile" type="number" class="form-control @error('mobile') is-invalid @enderror"
                   name="mobile" value="{{ old('mobile') }}" placeholder="09123456789">
            <label for="mobile" >شماره موبایل</label>
            @error('mobile')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        </div>

        <div class="mt-5 d-flex">
            <button class="btn btn-primary w-50 mx-2 " type="submit">بعدی</button>
            <a class="btn btn-warning w-50 mx-2" href="{{ url()->previous() }}">قبلی</a>
        </div>
    </form>
    <br><br>
@endsection
