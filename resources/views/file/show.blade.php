@extends('layouts.panel')

@section('content')

    <h2>{{ $file->title }}</h2>
    <div class="table-responsive small">


        @if($field->slug == 'emtiazat')
            <th scope="col">
                @if($file->emtiazat != [])
                    @php
                        $colMore = $file->pluck($field->slug)->flatten()->toArray();
                    @endphp
                    @foreach ($file->emtiazat($colMore) as $emtiyza)
                        {{ $emtiyza->name }}
                    @endforeach
                @else
                    مقدار خالی است
                @endif
            </th>
        @endif

        @if($field->slug == 'kabinet')
            <th scope="col">
                @if($file->Kabinet()->exists())
                    {{ ($file->Kabinet->name) }}
                @else
                    مقدار خالی است
                @endif
            </th>
        @endif

        @if($field->slug == 'price')
            <th scope="col"> {{ ($file->price) }} </th>
        @endif

        @if($field->slug == 'elvator')
            <th scope="col">
                @if($file->elvator == 0)
                    <span>ندارد</span>
                @else
                    <span>دارد</span>
                @endif
            </th>
        @endif


    </div>

@endsection
