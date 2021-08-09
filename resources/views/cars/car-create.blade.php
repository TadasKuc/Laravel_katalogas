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
                            <h2>Pridėti naują automobilį</h2>
                        </div>
                    </div>
                    <div class="contact-form">
                        <form id="contact" action="{{route('cars.store')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="manufacturer" type="text" class="form-control" id="manufacturer" placeholder="Gamintojas" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="model" type="text" class="form-control" id="model" placeholder="Automobilio modelis" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="year_manufacture" type="date" class="form-control" id="year_manufacture" placeholder="Pagaminimo data" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                                    <fieldset>
                                    <label for="inputPassword4">Variklio tūris</label>
                                    <select name="engine_cc" class="form-control" id="engine_cc" placeholder="Variklio tūris" required="">
                                        <option selected>Pasirinkti...</option>
                                        @for($i = 0; $i < 8; $i = $i + 0.1)
                                            <option>{{ $i }}</option>
                                        @endfor
                                    </select>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="power_kw" type="number" class="form-control" id="year_manufacture" placeholder="Galia kw" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <label for="inputPassword4">Pavarų dėžės tipas</label>
                                    <select name="gearbox" class="form-control" id="gearbox"  required="">
                                        <option selected>Pasirinkti...</option>
                                         <option value="Automatic">Mechanine</option>
                                         <option value="Mechanical">Automatine</option>
                                    </select>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                                    <label for="inputPassword4">Kuro tipas</label>
                                    <select name="fuel_type" class="form-control" id="fuel_type"  required="">

                                        <option selected>Pasirinkti...</option>
                                        <option value="Diesel">Dyzelinas</option>
                                    </select>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="color" type="text" class="form-control" id="model" placeholder="Automobilio spalva" required="">
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
{{--                <div class="col-md-4">--}}
{{--                    <ul class="accordion">--}}
{{--                        <li>--}}
{{--                            <a>Accordion Title One</a>--}}
{{--                            <div class="content">--}}
{{--                                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester consectetur similiqu consectetur.<br><br>Lorem ipsum dolor sit amet, consectetur adipisic elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti elite.</p>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a>Second Title Here</a>--}}
{{--                            <div class="content">--}}
{{--                                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester consectetur similiqu consectetur.<br><br>Lorem ipsum dolor sit amet, consectetur adipisic elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti elite.</p>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a>Accordion Title Three</a>--}}
{{--                            <div class="content">--}}
{{--                                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester consectetur similiqu consectetur.<br><br>Lorem ipsum dolor sit amet, consectetur adipisic elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti elite.</p>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a>Fourth Accordion Title</a>--}}
{{--                            <div class="content">--}}
{{--                                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester consectetur similiqu consectetur.<br><br>Lorem ipsum dolor sit amet, consectetur adipisic elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti elite.</p>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>




</x-app-layout>
