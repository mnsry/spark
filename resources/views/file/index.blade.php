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
                                    <table class="table-sm">
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
                                                @if (Schema::hasColumn($file->getTable(), $field->slug))
                                                    @php
                                                        $type = Schema::getColumnType('files', $field->slug);
                                                        $valCol = $file->value($field->slug);
                                                    @endphp
                                                    @if($type == 'integer')
                                                        @php
                                                            $check = Schema::enableForeignKeyConstraints();
                                                            $fieldchid = App\Models\Fieldchild::find($valCol);
                                                        @endphp

                                                        <th scope="col">
                                                            @if($check == 1)
                                                                {{ $fieldchid->name }}
                                                            @else
                                                                {{ $valCol }}
                                                            @endif
                                                        </th>
                                                    @endif
                                                    @if($type === 'boolean')
                                                        <th scope="col">
                                                            @if($valCol == 1)
                                                                دارد
                                                            @else
                                                                ندارد
                                                            @endif
                                                        </th>
                                                    @endif
                                                    @if($type === 'bigint')
                                                        <th scope="col">
                                                            {{ $valCol }}
                                                        </th>
                                                    @endif

                                                    @if( $valCol === null)
                                                        <th scope="col">
                                                            خالی
                                                        </th>
                                                    @endif
                                                    @if(is_string( $valCol ))
                                                        <th scope="col">
                                                            {{ $valCol }}
                                                        </th>
                                                    @endif
                                                    @if (is_array( $valCol ))
                                                        <th scope="col">
                                                            @if($valCol != [])
                                                                @foreach (App\Models\Fieldchild::whereIn('id', $valCol)->get() as $fieldchid)
                                                                    {{ $fieldchid->name }}
                                                                @endforeach
                                                            @else
                                                                مقدار خالی است
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
