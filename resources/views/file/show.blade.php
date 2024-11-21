@extends('layouts.panel')

@section('content')

    <h2>{{ $file->title }}</h2>
    <div class="table-responsive small">



        @if (Schema::hasColumn($file->getTable(), $field->slug))
            @php
                $type = Schema::getColumnType($file->getTable(), $field->slug);
                $valCol = $file->value($field->slug);
            @endphp
            @if($type == 'integer')
                <th scope="col">
                    @if($file->isFK($field->slug))
                        @php
                            $fieldchid = App\Models\Fieldchild::find($valCol);
                        @endphp
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





    </div>

@endsection
