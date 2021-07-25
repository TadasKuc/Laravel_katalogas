<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <form style="width: 80%" method="POST" action="{{route('address.store' )}}" enctype="multipart/form-data" >
        @csrf
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputEmail4">Šalis</label>
                <input type="text" class="form-control" name="country">
            </div>
            <div class="form-group col-md-4">
                <label for="inputPassword4">Miestas</label>
                <input type="text" class="form-control" name="city">
            </div>
            <div class="form-group col-md-4">
                <label for="inputPassword4">Pašto kodas</label>
                <input type="text" class="form-control" name="post_code">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="inputPassword4">Gatvė</label>
                <input type="text" class="form-control" name="street">
            </div>

            <div class="form-group col-md-3">
                <label for="inputPassword4">Namo nr</label>
                <input type="text" class="form-control" name="house">
            </div>

            <div class="form-group col-md-3">
                <label for="inputPassword4">Buto nr</label>
                <input type="text" class="form-control" name="flat">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Kurti</button>
    </form>
</x-app-layout>

