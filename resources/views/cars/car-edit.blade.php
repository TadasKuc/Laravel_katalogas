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
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="section-heading">
                            <h2>Redaguoti automobil─»</h2>
                        </div>
                    </div>
                    <div class="contact-form">
                        <form id="contact" action="{{route('cars.update', ['car' => $id])}}" method="post">
                            @csrf
                            @method('PATCH')
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    @error('manufacturer')
                                    <p class="" style="color:red">{{ $errors->first('manufacturer') }}</p>
                                    @enderror
                                    <fieldset>
                                        <input name="manufacturer"
                                               type="text"
                                               class="form-control"
                                               id="manufacturer"
                                               placeholder="Gamintojas"
                                               required=""
                                               value="{{$manufacturer}}">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    @error('model')
                                    <p class="" style="color:red">{{ $errors->first('model') }}</p>
                                    @enderror
                                    <fieldset>
                                        <input name="model"
                                               type="text"
                                               class="form-control"
                                               id="model"
                                               placeholder="Automobilio modelis"
                                               required=""
                                               value="{{$model}}">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    @error('year_manufacture')
                                    <p class="" style="color:red">{{ $errors->first('year_manufacture') }}</p>
                                    @enderror
                                    <fieldset>
                                        <input name="year_manufacture"
                                               type="date"
                                               class="form-control"
                                               id="year_manufacture"
                                               placeholder="Pagaminimo data"
                                               required=""
                                               value="{{$year_manufacture}}">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                                    @error('engine_cc')
                                    <p class="" style="color:red">{{ $errors->first('engine_cc') }}</p>
                                    @enderror
                                    <fieldset>
                                        <label>Variklio t┼źris</label>
                                        <select name="engine_cc" class="form-control"  placeholder="Variklio t┼źris" required="">
                                            <option value="{{$engine_cc}}">{{$engine_cc}}</option>
                                            @for($i = 0; $i < 8000; $i = $i + 100)
                                                <option value="{{ $i }}" >{{ $i }}</option>
                                            @endfor
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    @error('power_kw')
                                    <p class="" style="color:red">{{ $errors->first('power_kw') }}</p>
                                    @enderror
                                    <fieldset>
                                        <input name="power_kw"
                                               type="number"
                                               class="form-control"
                                               id="year_manufacture"
                                               placeholder="Galia kw"
                                               required=""
                                               value="{{$power_kw}}">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 mb-2">
                                    <label>Pavar┼│ d─Ś┼ż─Śs tipas</label>
                                    <select name="gearbox" class="form-control" id="gearbox"  required="">
                                        <option value="{{ $gearbox }}">{{ $gearbox }}</option>
                                        <option value="{{\App\Models\Car::MECHANICAL}}">Mechanine</option>
                                        <option value="{{\App\Models\Car::AUTOMATIC}}">Automatine</option>
                                    </select>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                                    <label for="fuel_type">Kuro tipas</label>
                                    <select name="fuel_type" class="form-control" id="fuel_type"  required="">
                                        <option value="{{$fuel_type}}">{{$fuel_type}}</option>
                                        <option value="{{\App\Models\Car::DIESEL}}">Dyzelinas</option>
                                        <option value="{{\App\Models\Car::GASOLINE}}">Benzinas</option>
                                        <option value="{{\App\Models\Car::PETROL_GAS}}">Benzinas/Dujos</option>
                                        <option value="{{\App\Models\Car::ELECTRICITY}}">Elektra</option>
                                    </select>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="color"
                                               type="text"
                                               class="form-control"
                                               id="model"
                                               placeholder="Automobilio spalva"
                                               required=""
                                               value="{{$color}}">
                                    </fieldset>
                                </div>

                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="filled-button">Kurti</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
