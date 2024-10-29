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
            <form action="{{ route('dev') }}" enctype="multipart/form-data">
                @csrf
                @foreach($category_select->fields as $field)
                    @if($field->form == 'TEXT')
                        <div class="form-floating py-3">
                            <input
                                type="text"
                                class="form-control"
                                id="{{ $field->slug }}"
                                placeholder="{{ $field->name }}"
                                name="{{ $field->slug }}"
                                value="{{ old($field->slug) }}"
                            >
                            <label for="{{ $field->slug }}">{{ $field->name }}</label>
                        </div>
                    @endif

                    @if($field->form == 'TEXTAREA')
                        <div class="form-floating py-3">
                            <textarea
                                class="form-control"
                                style="height: 100px"
                                id="{{ $field->slug }}"
                                name="{{ $field->slug }}"
                            >
                                {{ old($field->slug) }}
                            </textarea>
                            <label for="{{ $field->slug }}">{{ $field->name }}</label>
                        </div>
                    @endif

                    @if($field->form == 'NUMBER')
                        <div class="form-floating py-3">
                            <input
                                type="number"
                                class="form-control"
                                id="{{ $field->slug }}"
                                placeholder="{{ $field->name }}"
                                name="{{ $field->slug }}"
                                value="{{ old($field->slug) }}"
                            >
                            <label for="{{ $field->slug }}">{{ $field->name }}</label>
                        </div>
                    @endif

                    @if($field->form == 'SELECT')
                        <div class="form-floating py-3">
                            <select
                                class="form-select"
                                id="{{ $field->slug }}"
                                name="{{ $field->slug }}"
                            >
                                <option selected disabled>انتخاب کنید</option>
                                @foreach($field->childes as $f_child)
                                    <option value="{{ $f_child->id }}" @selected(old($field->slug) == $f_child->id)>
                                        {{ $f_child->name }}
                                    </option>
                                @endforeach
                            </select>
                            <label for="{{ $field->slug }}">{{ $field->name }}</label>
                        </div>
                    @endif

                    @if($field->form == 'MULTISELECT')
                        <div class="form-floating py-3">
                            <select
                                class="form-select"
                                style="height: 100px"
                                id="{{ $field->slug }}"
                                name="{{ $field->slug }}[]"
                                multiple
                            >
                                <option selected disabled>انتخاب کنید</option>
                                @foreach($field->childes as $f_child)
                                    <option value="{{ $f_child->id }}" @selected(old($field->slug) == $f_child->id)>
                                        {{ $f_child->name }}
                                    </option>
                                @endforeach
                            </select>
                            <label for="{{ $field->slug }}">{{ $field->name }}</label>
                        </div>
                    @endif

                    @if($field->form == 'CHECKBOX')
                        <div class="form-check form-switch form-check-inline py-3">
                            <input
                                type="checkbox"
                                class="form-check-input"
                                id="{{ $field->slug }}"
                                value="1"
                                name="{{ $field->slug }}"
                                {{ old($field->slug) == 1 ? 'checked' : '' }}
                            >
                            <label class="form-check-label" for="{{ $field->slug }}">{{ $field->name }}</label>
                        </div>
                    @endif

                    @if($field->form == 'RADIOBUTTON')
                        <br><p class="form-check form-check-inline"> {{ $field->name }}</p><br>
                        @foreach($field->childes as $f_child)
                            <div class="form-check form-check-inline">
                                <input
                                    type="radio"
                                    class="form-check-input"
                                    id="{{ $f_child->slug }}"
                                    value="{{ $f_child->id }}"
                                    name="{{ $field->slug }}"
                                    {{ old($field->slug) == $f_child->id ? 'checked' : '' }}
                                >
                                <label class="form-check-label" for="{{ $f_child->slug }}"> {{ $f_child->name }} </label>
                            </div>
                        @endforeach
                        <br>
                    @endif

                    @if($field->form == 'IMAGE')
                        <div class="input-group py-3">
                            <label class="input-group-text" for="{{ $field->slug }}">{{ $field->name }}</label>
                            <input
                                type="file"
                                class="form-control"
                                id="{{ $field->slug }}"
                                name="{{ $field->slug }}"
                                accept="image/*"
                            >
                        </div>
                    @endif
                @endforeach
                <button type="submit" class="btn btn-primary py-3">ثبت فایل</button>
            </form>
            <br><br>
        </div>
    </div>
@endsection
