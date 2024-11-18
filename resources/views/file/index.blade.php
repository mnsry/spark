@extends('layouts.panel')

@section('content')

    <h2>فایل ها من</h2>

    @foreach ($files as $file)
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-pills card-header-pills">
                    <li class="nav-item">
                        <a class="btn btn-outline-success disabled" aria-current="true" href="#">
                            {{ $file->category->parent->name }} |
                            {{ $file->category->name }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne{{ $file->id }}" aria-expanded="true" aria-controls="collapseOne{{ $file->id }}">
                            مشخصات
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo{{ $file->id }}" aria-expanded="false" aria-controls="collapseTwo{{ $file->id }}">
                            ویژگی ها
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree{{ $file->id }}" aria-expanded="false" aria-controls="collapseThree{{ $file->id }}">
                            ویرایش
                        </button>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="accordion" id="accordionExample{{ $file->id }}">
                    <div class="accordion-item">
                        <div id="collapseOne{{ $file->id }}" class="accordion-collapse collapse show" data-bs-parent="#accordionExample{{ $file->id }}">
                            <div class="accordion-body">
                                <div class="table-responsive">
                                    <div class="table-responsive">
                                        <table class="table align-middle">
                                            <thead>
                                            <tr>
                                                @foreach ($file->category->fields as $field)
                                                    <th scope="col">{{ $field->name }}</th>
                                                @endforeach
                                            </tr>
                                            </thead>
                                            <tbody>
{{--                                            <tr>--}}
{{--                                                @foreach($file->category->fields as $field)--}}
{{--                                                    @php--}}
{{--                                                        $colOne = $file->pluck($field->slug)->first();--}}
{{--                                                    @endphp--}}

{{--                                                    @if($field->slug == 'emtiazat')--}}
{{--                                                        <th scope="col">--}}
{{--                                                            @if($file->emtiazat != [])--}}
{{--                                                                @php--}}
{{--                                                                    $colMore = $file->pluck($field->slug)->flatten()->toArray();--}}
{{--                                                                @endphp--}}
{{--                                                                @foreach ($file->emtiazat($colMore) as $emtiyza)--}}
{{--                                                                    {{ $emtiyza->name }}--}}
{{--                                                                @endforeach--}}
{{--                                                            @else--}}
{{--                                                                مقدار خالی است--}}
{{--                                                            @endif--}}
{{--                                                        </th>--}}
{{--                                                    @endif--}}

{{--                                                    --}}{{-- @if($field->slug == 'kabinet')--}}
{{--                                                        <th scope="col">--}}
{{--                                                            @if($file->Kabinet()->exists())--}}
{{--                                                                {{ ($file->Kabinet->name) }}--}}
{{--                                                            @else--}}
{{--                                                                مقدار خالی است--}}
{{--                                                            @endif--}}
{{--                                                        </th>--}}
{{--                                                    @endif --}}

{{--                                                    @if($field->slug == 'price')--}}
{{--                                                        <th scope="col"> {{ ($file->price) }} </th>--}}
{{--                                                    @endif--}}

{{--                                                    @if($field->slug == 'elvator')--}}
{{--                                                        <th scope="col">--}}
{{--                                                            @if($file->elvator == 0)--}}
{{--                                                                <span>ندارد</span>--}}
{{--                                                            @else--}}
{{--                                                                <span>دارد</span>--}}
{{--                                                            @endif--}}
{{--                                                        </th>--}}
{{--                                                    @endif--}}

{{--                                                @endforeach--}}
{{--                                            </tr>--}}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="collapseTwo{{ $file->id }}" class="accordion-collapse collapse" data-bs-parent="#accordionExample{{ $file->id }}">
                            <div class="accordion-body">
                                optional
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="collapseThree{{ $file->id }}" class="accordion-collapse collapse" data-bs-parent="#accordionExample{{ $file->id }}">
                            <div class="accordion-body">
                                edit
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    @endforeach
@endsection
