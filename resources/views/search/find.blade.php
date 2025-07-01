@extends('layouts.panel')
@section('content')

    <div class="pt-2 text-center">
        <h2 class="text-primary">{{ $category_select->name }}</h2>
    </div>

    @foreach ($category_select->files as $file)

        <div class="card my-2">
            <div class="card-header">
                {{ $file->user->name }}<a class="btn"
                                          href="tel:{{ $file->user->mobile }}"> {{ $file->user->mobile }} </a>
                <div class="float-end">{{ $file->created_at->diffForHumans() }}</div>
            </div>
            <div class="card-body  text-center">
                <h5 class="card-title">{{ $file->category->parent->name }} | {{ $file->category->name }}</h5>
                <p class="card-text">
                    {{ $file->aboute }}
                </p>
            </div>
            <div class="card-footer">
                <ul class="nav nav-pills justify-content-center">
                    <li class="nav-item">
                        <a href="{{ route('file.show', $file )}}" class="btn btn-sm mx-1 btn-primary">نمایش</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('file.edit', $file )}}" class="btn btn-sm mx-1 btn-primary">ویرایش</a>
                    </li>
                </ul>
            </div>
        </div>
    @endforeach
    <br><br>
@endsection
