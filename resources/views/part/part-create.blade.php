

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <form style="width: 80%" method="POST" action="{{route('parts.store')}}" enctype="multipart/form-data" >
        @csrf
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputEmail4">Pavadinimas</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="form-group col-md-4">
                <label for="inputPassword4">Kaina</label>
                <input type="textarea" class="form-control" name="price">
            </div>

        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="exampleFormControlTextarea1">Aprašymas</label>
                <textarea class="form-control" name="description" rows="3"></textarea>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-8">
                <label for="inputEmail4">Automobilis</label>
                <select id="inputState" class="form-control" name="car_id">
                    <option selected>Pasirinkti...</option>
                    @foreach($cars as $car)
                        <option value="{{$car->id}}">{{$car->manufacturer . '-' . $car->model .'-'. $car->year_manufacture}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-md-4">
                <label for="inputEmail4">Kategorija</label>
                <select name="category_id">
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
            </div>

           </div>
        <label for="image">
            <span>Photo  <span class="required">*</span></span>
            <input
                class="input-field"
                type="file"
                name="image"
                id="image"
                value="{{old('image')}}">
        </label>
        <button type="submit" class="btn btn-primary">Kurti</button>
    </form>

 </x-app-layout>

