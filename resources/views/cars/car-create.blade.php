<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
{{--    <form style="width: 80%" method="POST" action="{{route('cars.store')}}" enctype="multipart/form-data" >--}}
{{--        @csrf--}}
{{--        <div class="form-row">--}}
{{--            <div class="form-group col-md-4">--}}
{{--                <label for="inputEmail4">Gamintojas</label>--}}
{{--                <input type="text" class="form-control" name="manufacturer">--}}
{{--            </div>--}}
{{--            <div class="form-group col-md-4">--}}
{{--                <label for="inputPassword4">Modelis</label>--}}
{{--                <input type="text" class="form-control" name="model">--}}
{{--            </div>--}}
{{--            <div class="form-group col-md-4">--}}
{{--                <label for="inputPassword4">Pagaminimo metai</label>--}}
{{--                <input type="date" class="form-control" name="year_manufacture">--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="form-row">--}}
{{--            <div class="form-group col-md-3">--}}
{{--                <label for="inputEmail4">Variklio tūris</label>--}}
{{--                <select id="inputState" class="form-control" name="engine_cc">--}}
{{--                    <option selected>Pasirinkti...</option>--}}
{{--                    @for($i = 0; $i < 8; $i = $i + 0.1)--}}
{{--                        <option>{{ $i }}</option>--}}
{{--                    @endfor--}}
{{--                </select>--}}
{{--            </div>--}}
{{--            <div class="form-group col-md-3">--}}
{{--                <label for="inputPassword4">Galia Kw</label>--}}
{{--                <input type="number" class="form-control" name="power_kw">--}}
{{--            </div>--}}

{{--            <div class="form-group col-md-3">--}}
{{--                <label for="inputPassword4">Pavarų dėžė</label>--}}
{{--                <input type="text" class="form-control" name="gearbox">--}}
{{--            </div>--}}

{{--            <div class="form-group col-md-3">--}}
{{--                <label for="inputPassword4">Kuro tipas</label>--}}
{{--                <input type="text" class="form-control" name="fuel_type">--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="form-row">--}}
{{--            <div class="form-group col-md-4">--}}
{{--                <label for="inputPassword4">Spalva</label>--}}
{{--                <input type="text" class="form-control" name="color">--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <button type="submit" class="btn btn-primary">Kurti</button>--}}
{{--    </form>--}}

    <div class="send-message">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Send us a Message</h2>
                    </div>
                </div>
                <div class="col-md-8">
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

{{--                                <div class="col-lg-12 col-md-12 col-sm-12">--}}
{{--                                    <fieldset>--}}
{{--                                        <select id="inputState" class="form-control" name="category_id">--}}
{{--                                            <option value="{{ 0 }}" selected>Pagrindinė kategorija (Pildyti jei kuriama subkategorija)</option>--}}
{{--                                            @foreach($categories as $cat)--}}
{{--                                                @if($cat->category_id === 0)--}}
{{--                                                    <option value="{{$cat->id}}">{{ $cat->name }}</option>--}}
{{--                                                @endif--}}
{{--                                            @endforeach--}}
{{--                                        </select>--}}
{{--                                    </fieldset>--}}
{{--                                </div>--}}
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="filled-button">Kurti</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="accordion">
                        <li>
                            <a>Accordion Title One</a>
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester consectetur similiqu consectetur.<br><br>Lorem ipsum dolor sit amet, consectetur adipisic elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti elite.</p>
                            </div>
                        </li>
                        <li>
                            <a>Second Title Here</a>
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester consectetur similiqu consectetur.<br><br>Lorem ipsum dolor sit amet, consectetur adipisic elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti elite.</p>
                            </div>
                        </li>
                        <li>
                            <a>Accordion Title Three</a>
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester consectetur similiqu consectetur.<br><br>Lorem ipsum dolor sit amet, consectetur adipisic elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti elite.</p>
                            </div>
                        </li>
                        <li>
                            <a>Fourth Accordion Title</a>
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester consectetur similiqu consectetur.<br><br>Lorem ipsum dolor sit amet, consectetur adipisic elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti elite.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>




</x-app-layout>
