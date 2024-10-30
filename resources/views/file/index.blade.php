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
                    <li>
                        <button class="nav-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo{{ $file->id }}" aria-expanded="false" aria-controls="collapseTwo{{ $file->id }}">
                            ویژگی ها
                        </button>
                    </li>
                    <li>
                        <button class="nav-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree{{ $file->id }}" aria-expanded="false" aria-controls="collapseThree{{ $file->id }}">
                            ویرایش
                        </button>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <div id="collapseOne{{ $file->id }}" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="table-responsive">
                                    <div class="table-responsive">
                                        <table class="table align-middle">
                                            <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">First</th>
                                                <th scope="col">Last</th>
                                                <th scope="col">Handle</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td colspan="2">Larry the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                            <tr class="align-bottom">
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                            </tr>
                                            <tr>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td class="align-top">This cell is aligned to the top.</td>
                                                <td>...</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="collapseTwo{{ $file->id }}" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                2

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="collapseThree{{ $file->id }}" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                3
                                @if($file->emtiyza != null)
                                    @php
                                        $field = \App\Models\Field::whereIn('id', $file->emtiyza)->get();
                                    @endphp
                                    @foreach ($field as $f)
                                        {{ $f->name  }} -
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    @endforeach
@endsection
