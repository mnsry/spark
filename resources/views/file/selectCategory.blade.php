@extends('layouts.panel')
@section('content')
    <div class="py-4 text-center">
        <h2 class="text-primary">{{ $category_select->name }}</h2>
        <p class="lead pt-4">انتخاب نوع ملک</p>
    </div>
    <form action="{{ route('file.create.user') }}">
        <div class="form-group">
            <select class="form-select" name="category_id" aria-label="category">
                @foreach($category_select->childes as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-primary w-100 mt-5" type="submit">بعدی</button>
    </form>
@endsection
