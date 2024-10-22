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
        <p class="lead pt-4">لطفا فیلد های زیر را با دقت پرکنید</p>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="#" method="post">
                @foreach($category_select->fields as $field)
                    @if($field->form == 'TEXT')
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">{{ $field->name }}</span>
                        <input type="text" class="form-control" placeholder="{{ $field->name }} ... " aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    @endif
                    @if($field->form == 'TEXTAREA')
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">{{ $field->name }}</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    @endif
                    @if($field->form == 'NUMBER')
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">{{ $field->name }}</span>
                            <input type="number" class="form-control" placeholder="{{ $field->name }} ... " aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    @endif
                    @if($field->form == 'SELECT')
                        <div class="form-group py-3">
                            <label for="categories">{{ $field->name }}</label>
                            <select class="form-select" aria-label="Default select example">
                                @foreach($field->childes as $f_child)
                                    <option value="{{ $f_child->id }}">{{ $f_child->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    @endif
                    @if($field->form == 'MULTISELECT')
                        <label for="categories">{{ $field->name }}</label>
                        <select class="form-select" multiple aria-label="Multiple select example">
                            @foreach($field->childes as $f_child)
                                <option value="{{ $f_child->id }}">{{ $f_child->name }}</option>
                            @endforeach
                        </select>
                    @endif
                    @if($field->form == 'CHECKBOX')
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                {{ $field->name }}
                            </label>
                        </div>
                    @endif
                    @if($field->form == 'RADIOBUTTON')
                        <label for="categories">{{ $field->name }}</label>
                        @foreach($field->childes as $f_child)
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="021" id="{{ $f_child->name }}" value="option1">
                                <label class="form-check-label" for="{{ $f_child->name }}">
                                    {{ $f_child->name }}
                                </label>
                            </div>
                        @endforeach
                    @endif
                    @if($field->form == 'IMAGE')
                        <div class="mb-3">
                            <label for="formFile" class="form-label">{{ $field->name }}</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>
                    @endif
                @endforeach
            </form>
        </div>
    </div>
@endsection
