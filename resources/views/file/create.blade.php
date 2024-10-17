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
        @php
            $categories = \TCG\Voyager\Models\Category::all()
        @endphp

        <div class="col-md-5 col-lg-4 order-md-last">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-body-secondary">دسته بندی ها</span>
                <span class="badge bg-secondary rounded-pill">{{ $categories->count() }}</span>
            </h4>
            <ul class="list-group mb-3">
                @foreach($categories as $category)
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">{{ $category->name }}</h6>
{{--                            <small class="text-body-secondary">وصف مختصر</small>--}}
                        </div>
                        <span class="text-body-secondary">{{ $category->id }}</span>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="col-md-7 col-lg-8">
            <h4 class="text-body-secondary mb-3">ثبت فایل جدید</h4>

            <form class="needs-validation" novalidate>
                <div class="row g-3">

                    <div class="col-12">
                        <label for="name" class="form-label">عنوان فایل</label>
                        <input type="text" class="form-control" id="name" placeholder="" value="" required>
                        <div class="invalid-feedback" role="alert">
                            @error('name') <strong>{{ $message }}</strong> @enderror
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="body" class="form-label">توضیحات</label>
                        <input type="text" class="form-control" id="body" placeholder="" value="" required>
                        <div class="invalid-feedback" role="alert">
                            @error('body') <strong>{{ $message }}</strong> @enderror
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="category" class="form-label">دسته بندی</label>
                        <select class="form-select" id="category" required>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">
                            @error('category') <strong>{{ $message }}</strong> @enderror
                        </div>
                    </div>

                    <h4 class="mb-3">انتخاب عکس</h4>

                    <div class="col-12">
                        <input type="file" class="form-control" id="image" name="image" accept="image/*">
                    </div>

                    <button class="w-100 btn btn-primary btn-lg" type="submit">ارسال فایل</button>
                </div>
            </form>

            <br><br>
        </div>
    </div>

@endsection
