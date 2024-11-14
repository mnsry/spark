@extends('layouts.panel')
@section('content')

    <div class="pt-2 text-center">
        <h2 class="text-primary">{{ $category_select->parent->name }} - {{ $category_select->name }}</h2>
        <p class="lead py-2"><span> اطلاعات ملک </span> - <span class="text-danger"> {{ $user->name }} </span></p>
    </div>

    <form action="{{ route('file.store') }}" method="POST">
        @csrf
        <input type="hidden" name="category_id" value="{{ $category_select->id }}" />
        <input type="hidden" name="user_id" value="{{ $user->id }}" />
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

            @if($field->form == 'SELECT')
                <div class="form-floating py-3">
                    <select
                        class="form-select"
                        id="{{ $field->slug }}"
                        name="{{ $field->slug }}"
                    >
                        <option selected disabled>انتخاب کنید</option>
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
            @endif

            @if($field->form == 'RADIOBUTTON')
                <br><p class="form-check form-check-inline"> {{ $field->name }}</p><br>
                @foreach($field->fieldchilds as $fieldchild)
                    @if ($field->field_child_categories == 0)
                        <div class="form-check form-check-inline">
                            <input
                                type="radio"
                                class="form-check-input"
                                id="{{ $fieldchild->slug }}"
                                value="{{ $fieldchild->id }}"
                                name="{{ $field->slug }}"
                                {{ old($field->slug) == $fieldchild->id ? 'checked' : '' }}
                            >
                            <label class="form-check-label" for="{{ $fieldchild->slug }}"> {{ $fieldchild->name }} </label>
                        </div>
                    @endif
                    @if ($field->field_child_categories == 1)
                        @foreach($fieldchild->categories as $category)
                            @if($category->id == $category_select->id)       
                                <div class="form-check form-check-inline">
                                    <input
                                        type="radio"
                                        class="form-check-input"
                                        id="{{ $fieldchild->slug }}"
                                        value="{{ $fieldchild->id }}"
                                        name="{{ $field->slug }}"
                                        {{ old($field->slug) == $fieldchild->id ? 'checked' : '' }}
                                    >
                                    <label class="form-check-label" for="{{ $fieldchild->slug }}"> {{ $fieldchild->name }} </label>
                                </div>
                            @endif
                        @endforeach
                    @endif
                @endforeach
                <br>
            @endif

        @endforeach
        <button class="btn btn-primary w-100 mx-2 " type="submit">ثبت</button>
    </form>
    <br><br>
@endsection
