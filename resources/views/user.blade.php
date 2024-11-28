@extends('layouts.panel')

@section('content')
    <h3>ویرایش  من</h3>
    <form class="mt-4" method="POST" action="{{ route('user.update') }}">
        @csrf
        <div class="mb-3 row">
            <label for="mobile" class="col-sm-2 col-form-label">موبایل</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="mobile" value="{{ Auth::user()->mobile }}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">نام و نام خانوادگی</label>
            <div class="col-sm-10">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                       name="name" value="{{ Auth::user()->name }}"  placeholder="name">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="avatar" class="col-sm-2 col-form-label">آواتار</label>
            <div class="col-sm-10">
                <input type="file" data-name="avatar" name="avatar">
            </div>
        </div>
        <button class="btn btn-primary w-100 mt-1" type="submit">ویرایش من</button>
    </form>
    <h3 class="mt-3">لیست کاربران</h3>
    <table class="table mt-3">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">نام</th>
            <th scope="col">سازنده</th>
            <th scope="col">موبایل</th>
            <th scope="col">تاریخ</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>
                    @if($user->parent()->exists())
                        {{ $user->parent->name }}
                    @else
                        توسط سایت
                    @endif
                </td>
                <td>{{ $user->mobile }}</td>
                <td>{{ $user->created_at->diffForHumans() }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
