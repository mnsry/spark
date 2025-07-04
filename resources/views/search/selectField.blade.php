@extends('layouts.panel')
@section('content')
    <div class="py-2 text-center">
        <h5 class=""> جستجو ... </h5>
        <h5 class="text-primary">{{ $category_select->parent->name }} > {{ $category_select->name }} > {{ $field->name }}</h5>
    </div>
    <div class="form-group">
        <form action="{{ route('search.find') }}">
            <input
                type="hidden"
                name="category_id"
                value="{{ $category_select->id }}"
            >
            <input
                type="hidden"
                name="field_id"
                value="{{ $field->id }}"
            >
            @if($field->form == 'TEXT')
                <div class="form-floating mt-3">
                    <input
                        type="text"
                        class="form-control @error( $field->slug ) is-invalid @enderror"
                        id="{{ $field->slug }}"
                        placeholder="{{ $field->name }}"
                        name="{{ $field->slug }}"
                        value="{{ old($field->slug) }}"
                        required
                    >
                    <label for="{{ $field->slug }}">{{ $field->name }}</label>
                </div>
                <p class="pt-2">عنوان را بنویسید</p>
            @endif

            @if($field->form == 'TEXTAREA')
                <div class="form-floating mt-3">
                <textarea
                    class="form-control @error( $field->slug ) is-invalid @enderror"
                    placeholder="{{ $field->name }}"
                    id="{{ $field->slug }}"
                    name="{{ $field->slug }}"
                    required
                    style="height: 100px"
                >{{ old($field->slug) }}</textarea>
                    <label for="{{ $field->slug }}">{{ $field->name }}</label>
                </div>
                    <p class="pt-2">توضیحات را بنویسید</p>
            @endif

            @if($field->form == 'NUMBER')
                <div class="form-floating mt-3">
                    <input
                        type="number"
                        class="form-control @error( $field->slug ) is-invalid @enderror"
                        id="{{ $field->slug }}"
                        placeholder="{{ $field->name }}"
                        name="{{ $field->slug }}"
                        value="{{ old($field->slug) }}"
                        required
                    >
                    <label for="{{ $field->slug }}">{{ $field->name }}</label>
                </div>
                    <p class="pt-2">عدد دلخواه را وارد کنید</p>
            @endif

            @if($field->form == 'SELECT')
                <div class="form-floating mt-3">
                    <select
                        class="form-select @error( $field->slug ) is-invalid @enderror"
                        id="{{ $field->slug }}"
                        name="{{ $field->slug }}"
                        required
                    >
                        <option selected disabled value="{{ old($field->slug) }}">انتخاب کنید</option>
                        @foreach($field->fieldchilds as $fieldchild)
                            @if ($field->field_child_categories == 0)
                                <option value="{{ $fieldchild->id }}" @selected(old($field->slug) == $fieldchild->id)>
                                    {{ $fieldchild->name }}
                                </option>
                            @endif
                            @if ($field->field_child_categories == 1)
                                @foreach($fieldchild->categories as $category)
                                    @if($category->id == $category_select->id)
                                        <option value="{{ $fieldchild->id }}" @selected(old($field->slug) == $fieldchild->id)>
                                            {{ $fieldchild->name }}
                                        </option>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </select>
                    <label for="{{ $field->slug }}">{{ $field->name }}</label>
                </div>
                    <p class="pt-2">یکی را انتخاب کنید</p>
            @endif

            @if($field->form == 'MULTISELECT')
                <div class="form-floating mt-3">
                    <select
                        class="form-select @error( $field->slug ) is-invalid @enderror"
                        style="height: 100px"
                        id="{{ $field->slug }}"
                        name="{{ $field->slug }}[]"
                        multiple
                        required
                    >
                        <option selected disabled value="{{ old($field->slug) }}">انتخاب کنید</option>
                        @foreach($field->fieldchilds as $fieldchild)
                            @if ($field->field_child_categories == 0)
                                <option value="{{ $fieldchild->id }}" @selected(old($field->slug) == $fieldchild->id)>
                                    {{ $fieldchild->name }}
                                </option>
                            @endif
                            @if ($field->field_child_categories == 1)
                                @foreach($fieldchild->categories as $category)
                                    @if($category->id == $category_select->id)
                                        <option value="{{ $fieldchild->id }}" @selected(old($field->slug) == $fieldchild->id)>
                                            {{ $fieldchild->name }}
                                        </option>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </select>
                    <label for="{{ $field->slug }}">{{ $field->name }}</label>
                </div>
                    <p class="pt-2">یک یا چند مورد را انتخاب کنید</p>
            @endif

            @if($field->form == 'RADIOBUTTON')
                <p class="form-check form-check-inline mt-3"> {{ $field->name }}</p>
                <br>
                @foreach($field->fieldchilds as $fieldchild)
                    <div class="form-check form-check-inline">
                        @if ($field->field_child_categories == 0)
                            <input
                                type="radio"
                                class="form-check-input @error( $field->slug ) is-invalid @enderror"
                                id="{{ $fieldchild->slug }}"
                                value="{{ $fieldchild->id }}"
                                name="{{ $field->slug }}"
                                {{ old($field->slug) ? 'checked' : '' }}
                                {{ $field->optional == 0 ? 'required' : '' }}
                            >
                        @endif
                        @if ($field->field_child_categories == 1)
                            @foreach($fieldchild->categories as $category)
                                @if($category->id == $category_select->id)
                                    <input
                                        type="radio"
                                        class="form-check-input @error( $field->slug ) is-invalid @enderror"
                                        id="{{ $fieldchild->slug }}"
                                        value="{{ $fieldchild->id }}"
                                        name="{{ $field->slug }}"
                                        {{ old($field->slug) ? 'checked' : '' }}
                                        {{ $field->optional == 0 ? 'required' : '' }}
                                    >
                                @endif
                            @endforeach
                        @endif
                        <label class="form-check-label" for="{{ $fieldchild->slug }}">{{ $fieldchild->name }}</label>
                    </div>
                @endforeach
                <br>
                    <p class="pt-2">یک گزینه را انتخاب کنید</p>
            @endif

            @if($field->form == 'CHECKBOX')
                <div class="form-check form-switch form-check-inline mt-3">
                    <input
                        type="checkbox"
                        class="form-check-input @error( $field->slug ) is-invalid @enderror"
                        id="{{ $field->slug }}"
                        value="1"
                        name="{{ $field->slug }}"
                        {{ old($field->slug) ? 'checked' : '' }}
                    >
                    <label class="form-check-label" for="{{ $field->slug }}">{{ $field->name }}</label>
                </div>
                    <p class="pt-2">با خاموش و روشن میزان صفر و یک را انتخاب کنید</p>
            @endif

            @if($field->form == 'MULTICHECKBOX')
                <p class="form-check form-check-inline mt-3"> {{ $field->name }}</p>
                <br>
                @foreach($field->fieldchilds as $fieldchild)
                    <div class="form-check form-check-inline">
                        @if ($field->field_child_categories == 0)
                            <input
                                type="checkbox"
                                class="form-check-input @error( $field->slug ) is-invalid @enderror"
                                id="{{ $fieldchild->slug }}"
                                value="{{ $fieldchild->id }}"
                                name="{{ $field->slug }}[]"
                                {{ old($field->slug) ? 'checked' : '' }}
                            >
                        @endif
                        @if ($field->field_child_categories == 1)
                            @foreach($fieldchild->categories as $category)
                                @if($category->id == $category_select->id)
                                    <input
                                        type="checkbox"
                                        class="form-check-input @error( $field->slug ) is-invalid @enderror"
                                        id="{{ $fieldchild->slug }}"
                                        value="{{ $fieldchild->id }}"
                                        name="{{ $field->slug }}[]"
                                        {{ old($field->slug) ? 'checked' : '' }}
                                    >
                                @endif
                            @endforeach
                        @endif
                        <label class="form-check-label" for="{{ $field->slug }}">{{ $fieldchild->name }}</label>
                    </div>
                @endforeach
                <br>
                    <p class="pt-2">چندتا را انتخاب کنید</p>
            @endif

            <button class="btn btn-primary w-100 pt-2" type="submit">نمایش</button>
        </form>
    </div>
    <br><br>
@endsection
