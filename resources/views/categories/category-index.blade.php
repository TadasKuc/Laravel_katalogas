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
                            <h2>Vartotojų sąrašas</h2>
                        </div>
                    </div>
                    <table class="table table-light table-striped" >
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Pavadinimas</th>
                            <th scope="col">Aprašymas</th>
                            <th scope="col">Kategorijos tipas</th>
                            <th></th>
                            <th>X</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr >
                                <td></td>
                                <td>{{$category->name}}</td>
                                <td>{{$category->description}}</td>
                                <td>@if($category->category_id === 0) Pagrindinė kategorija @else Subkategorija @endif</td>
                                <td><a class="btn btn-outline-warning" href="{{ route('categories.edit', $category) }}" style="color:blue">Redaguoti</a> </td>
                                <td>
                                    <form action="{{ route('categories.destroy', $category) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <input class="btn btn-outline-danger" type="Submit" value="Trinti">
                                    </form>
                                </td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



</x-app-layout>

