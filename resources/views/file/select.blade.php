@push('styles')
    <link href="{{ asset('css/checkout.css') }}" rel="stylesheet">
@endpush

@push('scripts')
    <script type="text/javascript" src="{{ asset('js/checkout.js') }}"></script>
@endpush

@extends('layouts.panel')

@section('content')

    <div class="py-4 text-center">
        <h2 class="py-3"><span class="text-primary">{{ $category_select->name }}</span></h2>
        <p class="lead">لطفا نوع ملک را مشخص کنید</p>
        <form action="{{ route('file.createuser') }}" method="post">
            <input type="hidden" name="user_id" value="{{ auth()->id() }}" />
            <input type="hidden" name="category_id" value="{{ $category_select->id }}" />
            @csrf
            <div class="form-group">
                <select class="form-select" name="category" aria-label="category">
                    @foreach($category_select->childes as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <button class="btn btn-primary w-100 mt-5" type="submit">بعدی</button>
        </form>
    </div>

@endsection
