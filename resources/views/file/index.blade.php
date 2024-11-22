@extends('layouts.panel')

@section('content')

    <h2>فایل ها من</h2>

    @foreach ($files as $file)
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-pills card-header-pills">
                    <li class="nav-item">
                        <button class="nav-link text-success">
                            {{ $file->category->parent->name }} |
                            {{ $file->category->name }}
                        </button>
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
                                    <table class="table">
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
                                      <br>
                                        <div class="d-flex justify-content-center">

                                            <form action="{{ route('file.like', $file) }}" method="post">
                                                @CSRF
                                                @method("put")
                                                <button class="btn {{ $file->like == 1 ? 'btn-success' : 'btn-primary' }} mx-3">
                                                    LIKE
                                                    <span class="badge {{ $file->like == 1 ? 'text-bg-danger' : 'text-bg-success' }} ">{{ $file->like }}</span>
                                                </button>
                                            </form>

                                            <form action="{{ route('file.shekar', $file) }}" method="post">
                                                @CSRF
                                                @method("put")
                                                <button class="btn {{ $file->shekar == 1 ? 'btn-success' : 'btn-primary' }} mx-3">
                                                    شکار<span class="badge {{ $file->shekar == 1 ? 'text-bg-danger' : 'text-bg-success' }} ">{{ $file->shekar }}</span>
                                                </button>
                                            </form>

                                            <a href="{{ route('file.show', $file )}}" class="btn btn-primary mx-3">نمایش</a>

                                            <a href="{{ route('file.edit', $file )}}" class="btn btn-primary mx-3">ویرایش</a>

                                            <button type="button" class="btn btn-danger mx-3" data-bs-toggle="modal"
                                                    data-bs-target="#deleteModal">
                                                حذف فایل
                                            </button>
                                        </div>
                                        <div class="modal fade" id="deleteModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">حذف فایل</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route("file.destroy", $file) }}" method="post">
                                                            @CSRF
                                                            @method("DELETE")
                                                            <div class="modal-body">
                                                                <p>آیا فایل {{ $file->category->name }} حذف میکنید؟ </p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">خیر</button>
                                                                <button type="submit" class="btn btn-primary">بله</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    @endforeach
@endsection
