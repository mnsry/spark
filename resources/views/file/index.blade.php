@extends('layouts.panel')

@section('content')

    <h2>فایل ها من</h2>
    <div class="table-responsive small">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">آیدی</th>
                <th scope="col">عکس</th>
                <th scope="col">عنوان</th>
                <th scope="col">دسته بندی</th>
                <th scope="col">وضعیت</th>
            </tr>
            </thead>

            <tbody>
            @foreach ($files as $file)
                <tr>
                    <td>{{ $file->id }}</td>
                    <td>
                        <img src="{{url('/') }}/storage/{{ $file->id }}" alt="{{ $file->id }}" style="width:100px"  />
                    </td>
                    <td>
                        <a href="{{ route('file.show' , $file) }}">
                            {{ $file->id }}
                        </a>
                    </td>
                    <td>
                        @php $category = \TCG\Voyager\Models\Category::find($file->id); @endphp
                        {{ $category->name }}
                    </td>
                    <td>
                        @if ($file->id == 'PUBLISHED')
                            انتشار
                        @endif
                        @if ($file->id == 'DRAFT')
                            مطلق
                        @endif
                        @if ($file->id == 'PENDING')
                            درحال بررسی
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
