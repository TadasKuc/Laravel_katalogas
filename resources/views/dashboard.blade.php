
{{--@extends('layouts.master')--}}
{{--@section('content')--}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <ul>vgnvn
        <li class="bg-danger"><a href="{{route('users.index')}}">Vartotojų peržiūra</a></li>
        <li><a href="{{route('cars.create')}}">Pridėti automobilį</a></li>
        <li><a href="{{route('cars.index')}}">Automobilių sąrašas</a></li>
        <li><a href="{{ route('parts.create') }}">Pridėti dalį</a></li>
        <li><a href="{{ route('parts.index') }}">Daliu sarasas</a></li>
        <li><a href="{{route('parts.index')}}">Visos dalys</a></li>
        <li><a href="{{route('address.create')}}">Prideti adresa</a></li>
        <li><a href="{{route('categories.create')}}">Prideti kategorija</a></li>
        <li><a href="#">Peržiūrėti automobilius</a></li>
    </ul>

</x-app-layout>
{{--@endsection--}}
