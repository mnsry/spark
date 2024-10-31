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
                                                    <th scope="col">emtiyza</th>
                                                    <th scope="col">sen_bana</th>
                                                    <th scope="col">tabaghe</th>
                                                    <th scope="col">mahal</th>
                                                    <th scope="col">cooler</th>
                                                    <th scope="col">water_hot</th>
                                                    <th scope="col">hot</th>
                                                    <th scope="col">kabinet</th>
                                                    <th scope="col">jahat</th>
                                                    <th scope="col">kafpoosh</th>
                                                    <th scope="col">sanad</th>
                                                    <th scope="col">kol_vahed</th>
                                                    <th scope="col">otagh</th>
                                                    <th scope="col">created_at</th>
                                                    <th scope="col">bazsazi</th>
                                                    <th scope="col">moaveze</th>
                                                    <th scope="col">farangi</th>
                                                    <th scope="col">more</th>
                                                    <th scope="col">price</th>
                                                    <th scope="col">rahn</th>
                                                    <th scope="col">ejare</th>
                                                    <th scope="col">metr</th>
                                                    <th scope="col">metr_zamin</th>
                                                    <th scope="col">elvator</th>
                                                    <th scope="col">anbari</th>
                                                    <th scope="col">balkon</th>
                                                    <th scope="col">parking</th>
                                                    <th scope="col">image</th>
                                                    <th scope="col">address</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="col">                                                   
                                                        @foreach (  $file->emtiyza($file->emtiyza) as $emtiaz)
                                                            {{ $emtiaz->name }} 
                                                        @endforeach
                                                    </th>                                                                 
                                                    <th scope="col"> {{ ($file->SenBana) }} </th>                                                                 
                                                    <th scope="col"> {{ ($file->Tabaghe->name) }} </th>                                                                 
                                                    <th scope="col"> {{ ($file->Mahal->name) }} </th>                                                                 
                                                    <th scope="col"> {{ ($file->Cooler->name) }} </th>                                                                 
                                                    <th scope="col"> {{ ($file->Waterhot->name) }} </th>                                                                 
                                                    <th scope="col"> {{ ($file->Hot->name) }} </th>                                                                 
                                                    <th scope="col"> {{ ($file->Kabinet->name) }} </th>                                                                 
                                                    <th scope="col"> {{ ($file->Jahat->name) }} </th>                                                                 
                                                    <th scope="col"> {{ ($file->Kafpoosh->name) }} </th>                                                                 
                                                    <th scope="col"> {{ ($file->Sanad->name) }} </th>                                                                 
                                                    <th scope="col"> {{ ($file->KolVahed->name) }} </th>                                                                                                                                                 
                                                    <th scope="col"> {{ ($file->Otagh->name) }} </th>                                                                 
                                                    <th scope="col"> {{ ($file->created_at) }} </th>                                                                 
                                                    <th scope="col"> {{ ($file->bazsazi) }} </th>                                                                 
                                                    <th scope="col"> {{ ($file->moaveze) }} </th>                                                                 
                                                    <th scope="col"> {{ ($file->farangi) }} </th>                                                                 
                                                    <th scope="col"> {{ ($file->more) }} </th>                                                                 
                                                    <th scope="col"> {{ ($file->price) }} </th>                                                                 
                                                    <th scope="col"> {{ ($file->rahn) }} </th>                                                                 
                                                    <th scope="col"> {{ ($file->ejare) }} </th>                                                                 
                                                    <th scope="col"> {{ ($file->metr) }} </th>                                                                 
                                                    <th scope="col"> {{ ($file->metr_zamin) }} </th>                                                                 
                                                    <th scope="col"> {{ ($file->elvator) }} </th>                                                                 
                                                    <th scope="col"> {{ ($file->anbari) }} </th>                                                                 
                                                    <th scope="col"> {{ ($file->balkon) }} </th>                                                                 
                                                    <th scope="col"> {{ ($file->parking) }} </th>                                                                 
                                                    <th scope="col"> {{ ($file->image) }} </th>                                                                 
                                                    <th scope="col"> {{ ($file->address) }} </th>                                                                 
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
                                ویژگی ها
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="collapseThree{{ $file->id }}" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                ویرایش
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    @endforeach
@endsection
