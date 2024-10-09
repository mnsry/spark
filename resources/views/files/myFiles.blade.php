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
            @php $user = auth()->user() @endphp
            @foreach ($user->posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td><img src="{{url('/') }}/storage/{{ $post->image }}" alt="{{ $post->title }}" style="width:100px"  /></td>
                    <td>{{ $post->title }}</td>
                    <td>
                        @php $category = \TCG\Voyager\Models\Category::find($post->category_id); @endphp
                        {{ $category->name }}
                    </td>
                    <td>
                        @if ($post->status == 'PUBLISHED')
                            انتشار
                        @endif
                        @if ($post->status == 'DRAFT')
                            مطلق
                        @endif
                        @if ($post->status == 'PENDING')
                            درحال بررسی
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
