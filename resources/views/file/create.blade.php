@push('styles')
    <link href="{{ asset('css/checkout.css') }}" rel="stylesheet">
@endpush

@push('scripts')
    <script type="text/javascript" src="{{ asset('js/checkout.js') }}"></script>
@endpush

@extends('layouts.panel')

@section('content')

    <div class="py-5 text-center">
        <h2>ایجاد فایل</h2>
        <p class="lead">لطفا فیلد های زیر را با دقت پرکنید</p>
    </div>

    <div class="row g-3">
        <div class="col-12">
            @php
                $categories = \App\Models\Category::whereNull('parent_id')->get();
            @endphp

            <form action="#" method="post" enctype="multipart/form-data">
                @foreach($categories as $category)
                    <div class="form-group">
                        <label for="categories">{{ $category->name }}</label>
                        <select
                            class="form-select"
                            aria-label="Default select example"
                            {{--Probmel--}}
                             @if($category->order == 120) multiple @endif
                        >
                            @foreach($category->childes as $child)
{{--                                @if($child->order == 11)--}}
{{--                                    <option value="{{ $child->id }}">{{ $child->name }}000</option>--}}
{{--                                @endif--}}
                                <option value="{{ $child->id }}">{{ $child->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <br>
                @endforeach
                <br>
            </form>
        </div>
    </div>

@endsection
