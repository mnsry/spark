@extends('layouts.panel')

@section('content')

    <table class="table">
        <thead>
        <tr>
            @foreach ($file->category->fields as $field)
                <th scope="col">{{ $field->name }}</th>
            @endforeach
        </tr>
        </thead>
        <tbody>
        <tr>
            @foreach($file->category->fields as $field)

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
                                {{--                                    @php--}}
                                {{--                                        $fieldchid = App\Models\Fieldchild::find($value);--}}
                                {{--                                    @endphp--}}
                                {{--                                    {{ $fieldchid->name }}--}}
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

            @endforeach
        </tr>
        </tbody>
    </table>


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

                <li class="nav-item">
                    <button type="button" class="btn btn-sm mx-1 btn-danger d-none d-sm-block" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $file->id }}">
                        حذف فایل
                    </button>
                    <div class="modal fade" id="deleteModal{{ $file->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5">حذف فایل</h1>
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
                </li>
            </div>
        </div>
    </div>

@endsection
