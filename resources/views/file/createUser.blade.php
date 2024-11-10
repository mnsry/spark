@push('styles')
    <link href="{{ asset('css/checkout.css') }}" rel="stylesheet">
@endpush

@push('scripts')
    <script type="text/javascript" src="{{ asset('js/checkout.js') }}"></script>
@endpush

@extends('layouts.panel')

@section('content')

    <div class="py-4 text-center">
        <h2>
            <span class="text-success">  {{ $category_select->parent->name }}</span>
            |
            <span class="text-primary">  {{ $category_select->name }}</span>
        </h2>
        <p class="lead pt-4">اطلاعات کاربر</p>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="{{ route('file.createinfo') }}" method="POST">
                <input type="hidden" name="user_id" value="{{ auth()->id() }}" />
                <input type="hidden" name="category" value="{{ $category_select->id }}" />
                @csrf
               
                <button type="submit" class="btn btn-primary py-3">بعدی</button>
            </form>
            <br><br>
        </div>
    </div>
@endsection
