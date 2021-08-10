
{{--@extends('layouts.master')--}}
{{--@section('content')--}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="send-message">
        <div class="container">
            <div class="row">
                @include('layouts.admin')
                @if(Auth()->user()->isSuperAdmin())
                <div class="col-md-10">
                    <div class="col-md-12">
                        <h2>Vartotojai</h2>
                        <table class="table table-light table-striped" style="width: 600px">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Vardas(Pavardė)</th>
                                <th scope="col">Elektroninis paštas</th>
                                <th scope="col">Rolė</th>
                                <th scope="col">Statusas</th>
                                <th scope="col">Miestas</th>
                                <th scope="col">Tel nr</th>
                                <th></th>
                                <th>X</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr >
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}} </td>
                                    <td>{{$user->role}} </td>
                                    <td>{{$user->approved}} </td>
                                    <td>{{$user->address->city}} </td>
                                    <td>{{$user->phone}} </td>
                                    <td><a class="btn btn-outline-warning" href="{{ route('users.edit', $user->id) }}" style="color:blue">Redaguoti</a> </td>
                                    <td><a class="btn btn-outline-danger" href="{{ route('users.destroy', $user) }}" style="color:red">Trinti</a> </td>

                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
                @endif
            </div>
        </div>
    </div>

</x-app-layout>
{{--@endsection--}}
