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
        <p class="lead">لطفا فیلد های زیر را با دقت پرکنید</p>
    </div>

    <div class="row">

        <div class="col-12">
            <form action="#" method="post">

                <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">First name</label>
                    <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                @foreach($category_select->fields as $field)
                    <div class="form-group py-3">
                        <label for="categories">{{ $field->name }}</label>
                        <select class="form-select" aria-label="Default select example">
                            @foreach($field->childes as $f_child)
                                <option value="{{ $f_child->id }}">{{ $f_child->name }}</option>
                            @endforeach
                        </select>
                    </div>
                @endforeach
            </form>
        </div>
    </div>

@endsection
