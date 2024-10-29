@extends('layouts.panel')

@section('content')

    <h2>فایل ها من</h2>
    <div class="table-responsive small">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">آیدی</th>
                <th scope="col">امتیازات</th>
            </tr>
            </thead>

            <tbody>
            @foreach ($files as $file)
                <tr>
                    <td>{{ $file->id }}</td>
                    <td>
                        @if($file->emtiyza != null)
                            @php
                                //$emtiyza = \App\Models\File::find(2);
                                    $field = \App\Models\Field::whereIn('id', $file->emtiyza)->get();
                            @endphp
                            @foreach ($field as $f)
                                {{ $f->name  }} - 
                            @endforeach
                        @endif

                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
