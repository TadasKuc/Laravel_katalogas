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
                <div class="col-md-8">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h2>Automobilių sąrašas</h2>
                        </div>
                    </div>
                    <table class="table" style="width: 80%">
                        <tr>
                            <th>Gamintojas</th>
                            <th>Modelis</th>
                            <th>Pagaminimo metai</th>
                            <th>Variklio tūris</th>
                            <th>Galia kw</th>
                            <th>Spalva</th>
                            <th>Kuro tipas</th>
                            <th>Pavaru deze</th>
                            @if(Auth()->user()->isSuperAdmin())
                                <th>Edit</th>
                                <th>X</th>
                            @endif
                        </tr>

                        @foreach($carsList as $car)
                            <tr class="">
                                <td><a href="">{{$car->manufacturer}} </a></td>
                                <td>{{$car->model}} </td>
                                <td>{{$car->year_manufacture}} </td>
                                <td>{{$car->engine_cc}} </td>
                                <td>{{$car->power_kw}} </td>
                                <td>{{$car->color}} </td>
                                <td>{{$car->fuel_type}} </td>
                                <td>{{$car->gearbox}} </td>

                                @if(Auth()->user()->isSuperAdmin())
                                <td><a class="btn btn-outline-warning" href="{{ route('cars.edit', $car->id) }}" style="color:blue">Redaguoti</a> </td>
                                <td>
                                    <form action="{{ route('cars.destroy' , ['car' => $car->id]) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <input class="btn btn-outline-danger" type="Submit" value="Trinti">
                                    </form>
                                </td>
                                @endif
                            </tr>

                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

