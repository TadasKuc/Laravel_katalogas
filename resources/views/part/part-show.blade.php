{{--@extends('layouts.master')--}}
{{--@section('content')--}}
<x-app-layout>
    <div class="card mb-3" style="max-width: 800px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                @foreach($part->image as $img)
                    <img class="card-img"
                         src="{{asset('storage/image/'.$img->path) }}"
                         alt="Card image cap"
                         style="width: 18rem; height: 15rem;">

                @endforeach
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{$part->title}}</h5>
                    <p class="card-text">{{$part->description}}</p>
                    <p class="card-text"><small class="text-muted">Automobilis {{$part->car->model}} {{$part->car->manufacturer}} {{$part->car->year_manufacture}}</small></p>
                    <p class="card-text">{{$part->category->name}} - {{$part->mainCategory($part->category->category_id)}}</p>
                    <p class="card-text">Kaina {{$part->price}} Eur</p>
                    <p class="card-text">Miestas {{$part->user->address->city}}</p>
                    <p class="card-text">Telefonas pasiteirasvimui {{$part->user->phone}}</p>

                </div>
            </div>
        </div>
    </div>

    <h1> Daugiau detaliu tinkanciu tam paciam auto </h1>
    <div class="container">
        <div class="row">
            @foreach($partsByCar as $partcar)
                <div class="col-4">
                    <div class="card">
                        @foreach($partcar->image as $img)
                            <img class="card-img-top" style="height: 200px;" src="{{asset('storage/image/'.$img->path) }}" alt="Card image cap">
                        @endforeach
                        <div class="card-body">
                            <h5 class="card-title">{{$partcar->title}} - kaina {{$partcar->price}} Eur</h5>
                            <p class="card-text">{{$partcar->description}}</p>
                            <p class="card-text">{{$partcar->car->manufacturer}} - {{$partcar->car->model}}</p>
                            <p class="card-text">{{$partcar->category->name}} * {{$partcar->mainCategory($partcar->category->category_id)}}</p>

                            <a href="{{route('parts.show', ['part' => $partcar])}}" class="btn btn-primary">Daugiau informacijos</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
{{--@endsection--}}
    </x-app-layout>
