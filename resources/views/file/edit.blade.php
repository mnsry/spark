@extends('layouts.panel')
@section('content')

    <div class="pt-2 text-center">
        <h2 class="text-primary">{{ $file->category->parent->name }} - {{ $file->category->name }}</h2>
        <p class="lead py-2"><span> اطلاعات ملک </span> - <span class="text-danger"> {{ $file->user->name }} </span></p>
    </div>

    <form action="{{ route('file.store') }}" method="POST">
        @csrf
        <input type="hidden" name="category_id" value="{{ $file->category->id }}" />
        <input type="hidden" name="user_id" value="{{ $file->user->id }}" />

        @foreach($file->category->fields as $field)
            @if($field->form == 'TEXT')
                <div class="form-floating mt-3">
                    @php
                        $value = DB::table('files')->whereId($file->id)->value($field->slug);
                    @endphp
                    <input
                        type="text"
                        class="form-control @error( $field->slug ) is-invalid @enderror"
                        id="{{ $field->slug }}"
                        placeholder="{{ $field->name }}"
                        name="{{ $field->slug }}"
                        value="{{ $value }}"
                        {{ $field->optional == 0 ? 'required' : '' }}
                    >
                    <label for="{{ $field->slug }}">{{ $field->name }}
                        @if($field->optional == 1)
                            <small class="translate-middle-y badge text-success">(اختیاری)</small>
                        @endif
                    </label>
                </div>
            @endif

            @if($field->form == 'TEXTAREA')
                <div class="form-floating mt-3">
                    @php
                        $value = DB::table('files')->whereId($file->id)->value($field->slug);
                    @endphp
                    <textarea
                        class="form-control @error( $field->slug ) is-invalid @enderror"
                        placeholder="{{ $field->name }}"
                        id="{{ $field->slug }}"
                        name="{{ $field->slug }}"
                        {{ $field->optional == 0 ? 'required' : '' }}
                        style="height: 100px"
                    >{{ $value }}</textarea>
                    <label for="{{ $field->slug }}">{{ $field->name }}
                        @if($field->optional == 1)
                            <small class="translate-middle-y badge text-success">(اختیاری)</small>
                        @endif
                    </label>
                </div>
            @endif

            @if($field->form == 'NUMBER')
                <div class="form-floating mt-3">
                    @php
                        $value = DB::table('files')->whereId($file->id)->value($field->slug);
                    @endphp
                    <input
                        type="number"
                        class="form-control @error( $field->slug ) is-invalid @enderror"
                        id="{{ $field->slug }}"
                        placeholder="{{ $field->name }}"
                        name="{{ $field->slug }}"
                        value="{{ $value }}"
                        {{ $field->optional == 0 ? 'required' : '' }}
                    >
                    <label for="{{ $field->slug }}">{{ $field->name }}
                        @if($field->optional == 1)
                            <small class="translate-middle-y badge text-success">(اختیاری)</small>
                        @endif
                    </label>
                </div>
            @endif

            @if($field->form == 'SELECT')
                <div class="form-floating mt-3">
                    @php
                        $value = DB::table('files')->whereId($file->id)->value($field->slug);
                    @endphp
                    <select
                        class="form-select @error( $field->slug ) is-invalid @enderror"
                        id="{{ $field->slug }}"
                        name="{{ $field->slug }}"
                        {{ $field->optional == 0 ? 'required' : '' }}
                    >
                        <option selected disabled value="{{ $value }}">
                            @if(is_null( $value ))
                                فیلد انتخاب نشده
                            @else
                                {{ DB::table('fieldchilds')->whereId($value)->value('name') }}
                            @endif
                        </option>
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
                    <label for="{{ $field->slug }}">{{ $field->name }}
                        @if($field->optional == 1)
                            <small class="translate-middle-y badge text-success">(اختیاری)</small>
                        @endif
                    </label>
                </div>
            @endif

            @if($field->form == 'MULTISELECT')
                <div class="form-floating mt-3">
                    <select
                        class="form-select @error( $field->slug ) is-invalid @enderror"
                        style="height: 100px"
                        id="{{ $field->slug }}"
                        name="{{ $field->slug }}[]"
                        multiple
                        {{ $field->optional == 0 ? 'required' : '' }}
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
                    <label for="{{ $field->slug }}">{{ $field->name }}
                        @if($field->optional == 1)
                            <small class="translate-middle-y badge text-success">(اختیاری)</small>
                        @endif
                    </label>
                </div>
            @endif

            @if($field->form == 'RADIOBUTTON')
                <p class="form-check form-check-inline mt-3"> {{ $field->name }}</p><br>
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
                        <label class="form-check-label" for="{{ $fieldchild->slug }}">{{ $field->name }}
                            @if($field->optional == 1)
                                <small class="translate-middle-y badge text-success">(اختیاری)</small>
                            @endif
                        </label>
                    </div>
                @endforeach
                <br>
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
                    <label class="form-check-label" for="{{ $field->slug }}">{{ $field->name }}
                        @if($field->optional == 1)
                            <small class="translate-middle-y badge text-success">(اختیاری)</small>
                        @endif
                    </label>
                </div>
            @endif

            @if($field->form == 'MULTICHECKBOX')
                <p class="form-check form-check-inline mt-3"> {{ $field->name }}</p><br>
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
                                {{ $field->optional == 0 ? 'required' : '' }}
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
                                        {{ $field->optional == 0 ? 'required' : '' }}
                                    >
                                @endif
                            @endforeach
                        @endif
                        <label class="form-check-label" for="{{ $field->slug }}">{{ $field->name }}
                            @if($field->optional == 1)
                                <small class="translate-middle-y badge text-success">(اختیاری)</small>
                            @endif
                        </label>
                    </div>
                @endforeach
                <br>
            @endif

            @if($field->form == 'IMAGE')
                <div class="input-group mt-3">
                    <label class="input-group-text" for="{{ $field->slug }}">{{ $field->name }}
                        @if($field->optional == 1)
                            <small class="translate-middle-y badge text-success">(اختیاری)</small>
                        @endif
                    </label>
                    <input
                        type="file"
                        class="form-control @error( $field->slug ) is-invalid @enderror"
                        id="{{ $field->slug }}"
                        name="{{ $field->slug }}"
                        accept="image/*"
                        {{ $field->optional == 0 ? 'required' : '' }}
                    >
                </div>
            @endif

            @if($field->form == 'MULTIIMAGE')
                <div class="input-group mt-3">
                    <label class="input-group-text" for="{{ $field->slug }}">{{ $field->name }}
                        @if($field->optional == 1)
                            <small class="translate-middle-y badge text-success">(اختیاری)</small>
                        @endif
                    </label>
                    <input
                        type="file"
                        class="form-control @error( $field->slug ) is-invalid @enderror"
                        id="{{ $field->slug }}"
                        name="{{ $field->slug }}[]"
                        accept="image/*"
                        {{ $field->optional == 0 ? 'required' : '' }}
                        multiple
                    >
                </div>
            @endif

            @if($field->form == 'DATE')
                <div class="d-flex text-center mt-3">
                    <div class="form-floating w-50 me-1">
                        <select
                            class="form-select"
                            id="{{ $field->slug }}day"
                            name="{{ $field->slug }}day"
                        >
                            <option selected disabled value="{{ old('takhleyeday') }}">انتخاب روز</option>
                            @php
                                $days = collect([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31])->all();
                            @endphp
                            @foreach($days as $day)
                                <option value="{{ $day }}" @selected(old('takhleyeday') == $day)>
                                    {{ $day }}
                                </option>
                            @endforeach
                        </select>
                        <label for="{{ $field->slug }}">{{ $field->name }}</label>
                    </div>

                    <div class="form-floating w-50 ms-1">
                        <select
                            class="form-select"
                            id="{{ $field->slug }}month"
                            name="{{ $field->slug }}month"
                        >
                            <option selected disabled value="{{ old('takhleyemonth') }}">انتخاب ماه</option>
                            @php
                                $months = collect(['فروردین','اردیبهشت','خرداد','تیر','مرداد','شهریور','مهر','ابان','آذر','دی','بهمن','اسفند',])->all();
                            @endphp
                            @foreach($months as $key=>$month)
                                <option value="{{ $key+1 }}" @selected(old('takhleyemonth') == $month)>
                                    {{ $month }}
                                </option>
                            @endforeach
                        </select>
                        <label for="{{ $field->slug }}">{{ $field->name }}</label>
                    </div>
                </div>
            @endif
        @endforeach
        <button class="btn btn-primary w-100 mt-3 " type="submit">ثبت</button>
    </form>
    <br><br>
@endsection
