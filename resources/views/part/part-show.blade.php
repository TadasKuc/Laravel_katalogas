@extends('layouts.master')
@section('content')
<x-app-layout>

    <div class="best-features about-features">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="right-image">
                        @foreach($part->image as $img)
                            <img src="{{asset('storage/image/'.$img->path)}}" style="max-height: 400px; object-fit: contain;" alt="">
                        @endforeach
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="left-content">
                        <h4>{{$part->title}}</h4>
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
    </div>

    <div class="team-members">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Daugiau detaliu tinkančiū jūsų automobiliui</h2>
                    </div>
                </div>
                @foreach($partsByCar as $partcar)
                <div class="col-md-4">
                    <div class="team-member">
                        <div class="thumb-container">
                            @foreach($partcar->image as $img)
                                <img src="{{asset('storage/image/'.$img->path) }}" style="max-height: 300px;" alt="">
                            @endforeach
                        </div>
                        <div class="down-content">
                            <a href="{{route('parts.show', ['part' => $partcar])}}"><h4>{{$partcar->title}}</h4></a>
                            <span>{{$partcar->car->manufacturer}} - {{$partcar->car->model}}</span>
                            <p>{{$partcar->category->name}} * {{$partcar->mainCategory($partcar->category->category_id)}}</p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>

    </x-app-layout>
