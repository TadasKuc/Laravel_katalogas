<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <table class="table" style="margin: 10px;">
        <tr>
            <th>Gamintojas</th>
            <th>Modelis</th>
            <th>Pagaminimo metai</th>
            <th>Variklio tūris</th>
            <th>Galia kw</th>
            <th>Spalva</th>
            <th>Kuro tipas</th>
            <th>Pavaru deze</th>
            <th>Edit</th>
            <th>X</th>

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
                <td><a href="{{ route('cars.edit', $car->id) }}" style="color:blue">Edit-</a> </td>
                <td>
                    <form action="{{ route('cars.destroy' , ['car' => $car->id]) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <input type="Submit" value="X">
                    </form>

{{--                    <a href="{{ route('cars.destroy', $car->id) }}" style="color:red">X</a> --}}
                </td>
            </tr>

        @endforeach
        </table>
        <h1><a href="{{route('dashboard')}}">Grižti į administratoriaus puslapį</a></h1>

</x-app-layout>

