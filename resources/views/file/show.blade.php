@extends('layouts.panel')

@section('content')

    <h2>{{ $file->user->name }}<a class="btn" href="tel:{{ $file->user->mobile }}"> {{ $file->user->mobile }} </a></h2>

    <div class="alert alert-success" role="alert">
        {{ $file->category->parent->name }} | {{ $file->category->name }}
        <div class="float-end">{{ $file->created_at->diffForHumans() }}</div>
    </div>

    <div class="card mt-3">
        <div class="card-header">
            <ul class="nav nav-pills justify-content-center">
                <li class="nav-item">
                    <a href="{{ route('file.index' )}}" class="btn btn-sm mx-1 btn-primary">برگشت</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('file.edit', $file )}}" class="btn btn-sm mx-1 btn-primary">ویرایش</a>
                </li>
                <li class="nav-item">
                    <form action="{{ route('file.like', $file) }}" method="post">
                        @CSRF
                        @method("put")
                        <button class="btn btn-sm mx-1 btn-primary">
                            لایک
                            <span class="badge {{ $file->like == 1 ? 'text-bg-danger' : 'text-bg-success' }} ">{{ $file->like }}</span>
                        </button>
                    </form>
                </li>
                <li class="nav-item">
                    <form action="{{ route('file.shekar', $file) }}" method="post">
                        @CSRF
                        @method("put")
                        <button class="btn btn-sm mx-1 btn-primary">
                            شکار
                            <span class="badge {{ $file->shekar == 1 ? 'text-bg-danger' : 'text-bg-success' }} ">{{ $file->shekar }}</span>
                        </button>
                    </form>
                </li>
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
            </ul>
        </div>
    </div>

    <div class="table-responsive mt-3">
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
                            $value = DB::table('files')->whereId($file->id)->value($field->slug);
                            $type = $file->type($field->slug);
                        @endphp

                        @if($type == 'integer')
                            <th scope="col">
                                @if($file->isFK($field->slug))
                                    @if(is_null( $value ))
                                        فیلد انتخاب نشده
                                    @else
                                        {{ DB::table('fieldchilds')->whereId($value)->value('name') }}
                                    @endif
                                @else
                                    @if(is_null( $value ))
                                        مقدار ثبت نشده
                                    @else
                                        {{ $value }}
                                    @endif
                                @endif
                            </th>
                        @endif

                        @if($type == 'boolean')
                            <th scope="col">
                                @if($value == 1)
                                    دارد
                                @else
                                    ندارد
                                @endif
                            </th>
                        @endif

                        @if($type == 'bigint')
                            <th scope="col">
                                @if(is_null( $value ))
                                    مبلغ درج نشده
                                @else
                                    {{ $value }}
                                @endif
                            </th>
                        @endif

                        @if($type == 'string')
                            <th scope="col">
                                @if(is_null( $value ))
                                    خالی
                                @else
                                    @php
                                        $val = $file->value($field->slug)
                                    @endphp
                                    @if (is_array( $val ))
                                        @if($field->slug == 'imagemulti')
                                            عکس ها
                                        @else
                                            @if($val == [])
                                                انتخاب نشده
                                            @else
                                                @foreach (DB::table('fieldchilds')->whereIn('id', $val)->get() as $fieldchid)
                                                    {{ $fieldchid->name }}
                                                @endforeach
                                            @endif
                                        @endif
                                    @else
                                        {{ $value }}
                                    @endif
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
    </div>
@endsection
