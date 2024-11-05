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
                                    <div class="table-responsive">
                                        <table class="table align-middle">
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
                                                    @php
                                                        $colOne = $file->pluck($field->slug)->first();
                                                    @endphp

                                                    @if($field->slug == 'emtiyza')
                                                        <th scope="col">
                                                            @if($file->emtiyza != [])
                                                                @php
                                                                    $colMore = $file->pluck($field->slug)->flatten()->toArray();
                                                                @endphp
                                                                @foreach (  $file->emtiyza($colMore) as $emtiaz)
                                                                    {{ $emtiaz->name }}
                                                                @endforeach
                                                            @else
                                                                مقدار خالی است
                                                            @endif
                                                        </th>
                                                    @endif

                                                    @if($field->slug == 'sen_bana')
                                                        <th scope="col">
                                                            @if($file->SenBana()->exists())
                                                                {{ ($file->SenBana->name) }}
                                                            @else
                                                                مقدار خالی است
                                                            @endif
                                                        </th>
                                                    @endif

                                                    @if($field->slug == 'tabaghe')
                                                        <th scope="col">
                                                            @if($file->Tabaghe()->exists())
                                                                {{ ($file->Tabaghe->name) }}
                                                            @else
                                                                مقدار خالی است
                                                            @endif
                                                        </th>
                                                    @endif

                                                    @if($field->slug == 'mahale')
                                                        <th scope="col">
                                                            @if($file->mahale()->exists())
                                                                {{ ($file->mahale->name) }}
                                                            @else
                                                                مقدار خالی است
                                                            @endif
                                                        </th>
                                                    @endif

                                                    @if($field->slug == 'cooler')
                                                        <th scope="col">
                                                            @if($file->Cooler()->exists())
                                                                {{ ($file->Cooler->name) }}
                                                            @else
                                                                مقدار خالی است
                                                            @endif
                                                        </th>
                                                    @endif

                                                    @if($field->slug == 'water_hot')
                                                        <th scope="col">
                                                            @if($file->Waterhot()->exists())
                                                                {{ ($file->Waterhot->name) }}
                                                            @else
                                                                مقدار خالی است
                                                            @endif
                                                        </th>
                                                    @endif

                                                    @if($field->slug == 'hot')
                                                        <th scope="col">
                                                            @if($file->Hot()->exists())
                                                                {{ ($file->Hot->name) }}
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

                                                    @if($field->slug == 'jahat')
                                                        <th scope="col">
                                                            @if($file->Jahat()->exists())
                                                                {{ ($file->Jahat->name) }}
                                                            @else
                                                                مقدار خالی است
                                                            @endif
                                                        </th>
                                                    @endif

                                                    @if($field->slug == 'kafpoosh')
                                                        <th scope="col">
                                                            @if($file->Kafpoosh()->exists())
                                                                {{ ($file->Kafpoosh->name) }}
                                                            @else
                                                                مقدار خالی است
                                                            @endif
                                                        </th>
                                                    @endif

                                                    @if($field->slug == 'sanad')
                                                        <th scope="col">
                                                            @if($file->Sanad()->exists())
                                                                {{ ($file->Sanad->name) }}
                                                            @else
                                                                مقدار خالی است
                                                            @endif
                                                        </th>
                                                    @endif

                                                    @if($field->slug == 'kol_vahed')
                                                        <th scope="col">
                                                            @if($file->KolVahed()->exists())
                                                                {{ ($file->KolVahed->name) }}
                                                            @else
                                                                مقدار خالی است
                                                            @endif
                                                        </th>
                                                    @endif

                                                    @if($field->slug == 'otagh')
                                                        <th scope="col">
                                                            @if($file->Otagh()->exists())
                                                                {{ ($file->Otagh->name) }}
                                                            @else
                                                                مقدار خالی است
                                                            @endif
                                                        </th>
                                                    @endif

                                                    @if($field->slug == 'bazsazi')
                                                        <th scope="col">
                                                            @if($file->bazsazi == 0)
                                                                <span>نشده</span>
                                                            @else
                                                                <span>شده</span>
                                                            @endif
                                                        </th>
                                                    @endif

                                                    @if($field->slug == 'moaveze')
                                                        <th scope="col">
                                                            @if($file->moaveze == 0)
                                                                <span>ندارم</span>
                                                            @else
                                                                <span>دارم</span>
                                                            @endif
                                                        </th>
                                                    @endif

                                                    @if($field->slug == 'farangi')
                                                        <th scope="col">
                                                            @if($file->farangi == 0)
                                                                <span>ندارد</span>
                                                            @else
                                                                <span>دارد</span>
                                                            @endif
                                                        </th>
                                                    @endif

                                                    @if($field->slug == 'more')
                                                        <th scope="col">
                                                            @if($file->more == null)
                                                                <span>ندارد</span>
                                                            @else
                                                                <span>{{ ($file->more) }}</span>
                                                            @endif
                                                        </th>
                                                    @endif

                                                    @if($field->slug == 'price')
                                                        <th scope="col"> {{ ($file->price) }} </th>
                                                    @endif

                                                    @if($field->slug == 'rahn')
                                                        <th scope="col"> {{ ($file->rahn) }} </th>
                                                    @endif

                                                    @if($field->slug == 'ejare')
                                                        <th scope="col"> {{ ($file->ejare) }} </th>
                                                    @endif

                                                    @if($field->slug == 'metr')
                                                        <th scope="col"> {{ ($file->metr) }} </th>
                                                    @endif

                                                    @if($field->slug == 'metr_zamin')
                                                        <th scope="col"> {{ ($file->metr_zamin) }} </th>
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

                                                    @if($field->slug == 'anbari')
                                                        <th scope="col">
                                                            @if($file->anbari == 0)
                                                                <span>ندارد</span>
                                                            @else
                                                                <span>دارد</span>
                                                            @endif
                                                        </th>
                                                    @endif

                                                    @if($field->slug == 'balkon')
                                                        <th scope="col">
                                                            @if($file->balkon == 0)
                                                                <span>ندارد</span>
                                                            @else
                                                                <span>دارد</span>
                                                            @endif
                                                        </th>
                                                    @endif

                                                    @if($field->slug == 'parking')
                                                        <th scope="col">
                                                            @if($file->parking == 0)
                                                                <span>ندارد</span>
                                                            @else
                                                                <span>دارد</span>
                                                            @endif
                                                        </th>
                                                    @endif

                                                    @if($field->slug == 'image')
                                                        <th scope="col"> {{ ($file->image) }} </th>
                                                    @endif

                                                    @if($field->slug == 'address')
                                                        <th scope="col">
                                                            @if($file->address == null)
                                                                <span>ندارد</span>
                                                            @else
                                                                <span>{{ ($file->address) }}</span>
                                                            @endif
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
