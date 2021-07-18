<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <form style="width: 80%" method="POST" action="{{route('cars.store')}}" enctype="multipart/form-data" >
        @csrf
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputEmail4">Gamintojas</label>
                <input type="text" class="form-control" name="manufacturer">
            </div>
            <div class="form-group col-md-4">
                <label for="inputPassword4">Modelis</label>
                <input type="text" class="form-control" name="model">
            </div>
            <div class="form-group col-md-4">
                <label for="inputPassword4">Pagaminimo metai</label>
                <input type="date" class="form-control" name="year_manufacture">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="inputEmail4">Variklio tūris</label>
                <select id="inputState" class="form-control" name="engine_cc">
                    <option selected>Pasirinkti...</option>
                    @for($i = 0; $i < 8; $i = $i + 0.1)
                        <option>{{ $i }}</option>
                    @endfor
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="inputPassword4">Galia Kw</label>
                <input type="number" class="form-control" name="power_kw">
            </div>

            <div class="form-group col-md-3">
                <label for="inputPassword4">Pavarų dėžė</label>
                <input type="text" class="form-control" name="gearbox">
            </div>

            <div class="form-group col-md-3">
                <label for="inputPassword4">Kuro tipas</label>
                <input type="text" class="form-control" name="fuel_type">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputPassword4">Spalva</label>
                <input type="text" class="form-control" name="color">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Kurti</button>
    </form>



</x-app-layout>
