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
                            بیشتر
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
                                    <table class="table-sm">
                                        <thead>
                                        <tr>
                                            @foreach ($file->category->fields as $field)
                                                @if ($field->optional == 0)
                                                    <th scope="col">{{ $field->name }}</th>
                                                @endif
                                            @endforeach
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            @foreach($file->category->fields as $field)
                                            @if ($field->optional == 0)
                                                @if ($file->hosCol($field->slug))
                                                    @php
                                                        $value = $file->value($field->slug); 
                                                    @endphp

                                                    @if(is_null( $value ))
                                                        <th scope="col">
                                                            خالی
                                                        </th>
                                                    @endif

                                                    @if(is_string( $value ))
                                                        <th scope="col">
                                                            {{ $value }}
                                                        </th>
                                                    @endif

                                                    @if(is_numeric( $value ))
                                                        @php
                                                            $type = $file->type($field->slug); 
                                                        @endphp
                                                        <th scope="col">
                                                            @if($file->isFK($field->slug))
                                                                @php
                                                                    $fieldchid = App\Models\Fieldchild::find($value);
                                                                @endphp
                                                                {{ $fieldchid->name }}
                                                            @else
                                                                @if($type === 'boolean')
                                                                    @if($value == 1)
                                                                        دارد
                                                                    @else
                                                                        ندارد
                                                                    @endif
                                                                @else
                                                                    {{ $value }}
                                                                @endif
                                                            @endif
                                                        </th>
                                                    @endif

                                                    @if (is_array( $value ))
                                                        <th scope="col">
                                                            @if($value != [])
                                                                @php
                                                                    $fieldchilds = App\Models\Fieldchild::whereIn('id', $value)->get(); 
                                                                @endphp
                                                                @foreach ($fieldchilds as $fieldchid)
                                                                    {{ $fieldchid->name }}
                                                                @endforeach
                                                            @else
                                                                خالی
                                                            @endif
                                                        </th>
                                                    @endif
                                                @else
                                                    <th scope="col">
                                                        {{ $file->takhleyeday }} / {{ $file->takhleyemonth }}
                                                    </th>
                                                @endif
                                                @endif
                                            @endforeach
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="collapseTwo{{ $file->id }}" class="accordion-collapse collapse" data-bs-parent="#accordionExample{{ $file->id }}">
                            <div class="accordion-body">
                                <div class="table-responsive">
                                    <table class="table-sm">
                                        <thead>
                                        <tr>
                                            @foreach ($file->category->fields as $field)
                                                @if ($field->optional == 1)
                                                    <th scope="col">{{ $field->name }}</th>
                                                @endif
                                            @endforeach
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            @foreach($file->category->fields as $field)
                                            @if ($field->optional == 1)
                                                @if ($file->hosCol($field->slug))
                                                    @php
                                                        $value = $file->value($field->slug); 
                                                    @endphp

                                                    @if(is_null( $value ))
                                                        <th scope="col">
                                                            خالی
                                                        </th>
                                                    @endif

                                                    @if(is_string( $value ))
                                                        <th scope="col">
                                                            {{ $value }}
                                                        </th>
                                                    @endif

                                                    @if(is_numeric( $value ))
                                                        @php
                                                            $type = $file->type($field->slug); 
                                                        @endphp
                                                        <th scope="col">
                                                            @if($file->isFK($field->slug))
                                                                @php
                                                                    $fieldchid = App\Models\Fieldchild::find($value);
                                                                @endphp
                                                                {{ $fieldchid->name }}
                                                            @else
                                                                @if($type === 'boolean')
                                                                    @if($value == 1)
                                                                        دارد
                                                                    @else
                                                                        ندارد
                                                                    @endif
                                                                @else
                                                                    {{ $value }}
                                                                @endif
                                                            @endif
                                                        </th>
                                                    @endif

                                                    @if (is_array( $value ))
                                                        <th scope="col">
                                                            @if($value != [])
                                                                @php
                                                                    $fieldchilds = App\Models\Fieldchild::whereIn('id', $value)->get(); 
                                                                @endphp
                                                                @foreach ($fieldchilds as $fieldchid)
                                                                    {{ $fieldchid->name }}
                                                                @endforeach
                                                            @else
                                                                خالی
                                                            @endif
                                                        </th>
                                                    @endif
                                                @else
                                                    <th scope="col">
                                                        {{ $file->takhleyeday }} / {{ $file->takhleyemonth }}
                                                    </th>
                                                @endif
                                                @endif
                                            @endforeach
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="collapseThree{{ $file->id }}" class="accordion-collapse collapse" data-bs-parent="#accordionExample{{ $file->id }}">
                            <div class="accordion-body">
                                <div class="card">
                                    <div class="card-header">
                                    <span> اطلاعات مالک </span>
                                    </div>
                                    <div class="card-body">
                                      <h5 class="card-title">{{ $file->user->name}} <span> {{ $file->user->mobile}} </span></h5>
                                      {{-- <p class="card-text">ویرایش فایل</p> --}}
                                      <br>
                                      <a href="#" class="btn btn-primary">لایک کردن</a>
                                      <a href="#" class="btn btn-primary">شکار</a>
                                      <a href="#" class="btn btn-primary">ویرایش</a>
                                      <a href="#" class="btn btn-danger">حذف</a>
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    @endforeach
@endsection
