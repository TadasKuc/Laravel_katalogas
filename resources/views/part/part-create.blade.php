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
                            <h2>Pridėti naują dalį</h2>
                        </div>
                    </div>
                    <div class="contact-form">
                        <form id="contact" action="{{route('parts.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="title" type="text" class="form-control" id="title" placeholder="Detalės pavadinimas" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <textarea name="description" type="text" class="form-control" id="description" placeholder="Detalus aprašymas" required=""></textarea>
                                    </fieldset>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="price" type="number" class="form-control" id="price" placeholder="Kaina" required="">
                                    </fieldset>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                                    <fieldset>
                                        <label for="car_id">Automobilis</label>
                                        <select name="car_id" class="form-control" id="car_id"  required="">
                                            <option selected>Pasirinkti...</option>
                                            @foreach($cars as $car)
                                                <option value="{{$car->id}}">{{$car->manufacturer . '-' . $car->model .'-'. $car->year_manufacture}}</option>
                                            @endforeach
                                        </select>
                                    </fieldset>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                                    <fieldset>
                                        <label for="category_id">Kategorija</label>
                                        <select name="category_id" class="form-control" id="category_id"  required="">
                                            <option selected="selected">Pasirinkti kategorija...</option>
                                            @foreach($categories as $category)
                                                @if($category->category_id === 0)
                                                    <optgroup value="{{$category->id}}" label="{{$category->name}}" name="category_id">
                                                        @endif
                                                        @foreach($categories as $subCategory)
                                                            @if($subCategory->category_id === $category->id)
                                                                <option value="{{$subCategory->id}}" name="category_id">{{$subCategory->name}}</option>
                                                @endif
                                            @endforeach
                                            @endforeach
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input class="input-field" type="file" name="image" id="image">
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

