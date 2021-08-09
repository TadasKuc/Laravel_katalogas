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
                            <h2>Kategorijos kūrimas</h2>
                        </div>
                    </div>
                    <div class="contact-form">
                        <form id="contact" action="{{route('categories.store')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="name" type="text" class="form-control" id="name" placeholder="Kategorijos pavadinimas" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="description" type="text" class="form-control" id="description" placeholder="Trumpas kategorijos aprašymas" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <select id="inputState" class="form-control" name="category_id">
                                            <option value="{{ 0 }}" selected>Pagrindinė kategorija (Pildyti jei kuriama subkategorija)</option>
                                            @foreach($categories as $cat)
                                                @if($cat->category_id === 0)
                                                    <option value="{{$cat->id}}">{{ $cat->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
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
