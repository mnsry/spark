@extends('layouts.panel')
@section('content')
    <div class="py-4 text-center">
        <h2 class="text-primary"> {{ $category_select->parent->name }} - {{ $category_select->name }} </h2>
        <p class="lead pt-4">اطلاعات مکان</p>
    </div>
    <form action="{{ route('file.create.info') }}">
        <input type="hidden" name="category_id" value="{{ $category_select->id }}" />
        <div class="form-floating">
            <select
                class="form-select"
                id="{{ $field_mahale->slug }}"
                name="{{ $field_mahale->slug }}"
            >
                <option selected disabled>انتخاب کنید</option>
                @foreach($field_mahale->fieldchilds as $fieldchild)
                    <option value="{{ $fieldchild->id }}" @selected(old($field_mahale->id) == $fieldchild->id)>
                        {{ $fieldchild->name }}
                    </option>
                    {{-- @foreach($fieldchild->categories as $cat)
                        @if($cat->id == $category_select->id)
                            <option value="{{ $fieldchild->id }}" @selected(old($field->slug) == $fieldchild->id)>
                                {{ $fieldchild->name }}
                            </option>
                        @endif
                    @endforeach --}}
                @endforeach
            </select>
            <label for="{{ $field_mahale->slug }}">{{ $field_mahale->name }}</label>
        </div>

        <div class="form-floating mt-4">
            <input
                type="text"
                class="form-control"
                id="{{ $field_address->slug }}"
                placeholder="{{ $field_address->name }}"
                name="{{ $field_address->slug }}"
                value="{{ old($field_address->slug) }}"
            >
            <label for="{{ $field_address->slug }}">{{ $field_address->name }}</label>
        </div>

        <div class="mt-5 d-flex">
            <button class="btn btn-primary w-50 mx-2 " type="submit">بعدی</button>
            <a class="btn btn-warning w-50 mx-2" href="{{ url()->previous() }}">قبلی</a>
        </div>
    </form>
    <br><br>
@endsection
