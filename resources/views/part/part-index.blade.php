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
                <div class="col-md-10">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h2>Dalių sąrašas</h2>
                        </div>
                    </div>
                    <table class="table m-5" style="width: 80%">
                        <tr>
                            <th>Nuotrauka</th>
                            <th>Pavadinimas</th>
                            <th>Aprašymas</th>
                            <th>Kaina</th>
                            <th>Kategorija</th>
                            <th>Automobilis</th>

                            <th>Edit</th>
                            <th>X</th>
                        </tr>

                        @foreach($parts as $part)
                            <tr class="">
                                <td> @foreach($part->image as $img)
                                        <img class="card-img-top" style="max-height: 200px;" src="{{asset('storage/image/'.$img->path) }}" alt="Card image cap">
                                    @endforeach</td>
                                <td><a href="">{{$part->title}}</a></td>
                                <td>{{$part->description}} </td>
                                <td>{{$part->price}} </td>
                                <td>{{$part->mainCategory($part->category->category_id)}} / {{$part->category->name}}  </td>
                                <td>{{$part->car->manufacturer}} / {{$part->car->model}} / {{$part->car->year_manufacture}} </td>
                                <td><a class="btn btn-outline-warning" href="{{ route('parts.edit', $part->id) }}" style="color:blue">Redaguoti</a> </td>
                                <td>
                                    <form action="{{ route('parts.destroy' , ['part' => $part->id]) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <input class="btn btn-outline-danger" type="Submit" value="Trinti">
                                    </form>
                                </td>
                            </tr>

                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

