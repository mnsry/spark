@push('styles')
    <link href="{{ asset('css/checkout.css') }}" rel="stylesheet">
@endpush

@push('scripts')
    <script type="text/javascript" src="{{ asset('js/checkout.js') }}"></script>
@endpush

@extends('layouts.panel')

@section('content')

    <div class="py-4 text-center">
        <h2>ثبت فایل : <span class="text-primary">{{ $category_select->name }}</span></h2>
        <p class="lead">لطفا فیلد های زیر را با دقت پرکنید</p>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="#" method="post" enctype="multipart/form-data">

                <div class="form-group py-3">
                    <label for="categories">انتخاب ملک</label>
                    <select class="form-select" aria-label="Default select example">
                        @foreach($category_childes_select as $child_select)
                            <option value="{{ $child_select->id }}">{{ $child_select->name }}</option>
                        @endforeach
                    </select>
                </div>

                @foreach($categories_parentNull as $category)
                    @if($category->order != 10 && $category->order != 20)
                        <div class="form-group py-3">
                            <label for="categories">{{ $category->name }}</label>
                            <select
                                class="form-select"
                                aria-label="Default select example"
                                @if($category->order == 120) multiple @endif
                            >
                                @foreach($category->childes as $child)
                                    <option value="{{ $child->id }}">{{ $child->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    @endif
                @endforeach
                <br>
            </form>
        </div>
    </div>

@endsection
