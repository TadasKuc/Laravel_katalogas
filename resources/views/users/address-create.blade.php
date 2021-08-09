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
                    <div class="col-lg-12 col-md-12 col-sm-12"">
                        <div class="section-heading">
                            <h2>Adresas</h2>
                        </div>
                    </div>
                    <div class="contact-form">
                        <form id="contact" action="{{route('address.store' )}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="country" type="text" class="form-control" id="country" placeholder="Šalis" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="city" type="text" class="form-control" id="city" placeholder="Miestas" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="post_code" type="text" class="form-control" id="post_code" placeholder="Pašto kodas" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="street" type="text" class="form-control" id="street" placeholder="Gatvė" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="house" type="number" class="form-control" id="house" placeholder="Namo nr" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="flat" type="number" class="form-control" id="flat" placeholder="Buto nr" >
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

{{--    <form style="width: 80%" method="POST" action="{{route('address.store' )}}" enctype="multipart/form-data" >--}}
{{--        @csrf--}}
{{--        <div class="form-row">--}}
{{--            <div class="form-group col-md-4">--}}
{{--                <label for="inputEmail4">Šalis</label>--}}
{{--                <input type="text" class="form-control" name="country">--}}
{{--            </div>--}}
{{--            <div class="form-group col-md-4">--}}
{{--                <label for="inputPassword4">Miestas</label>--}}
{{--                <input type="text" class="form-control" name="city">--}}
{{--            </div>--}}
{{--            <div class="form-group col-md-4">--}}
{{--                <label for="inputPassword4">Pašto kodas</label>--}}
{{--                <input type="text" class="form-control" name="post_code">--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="form-row">--}}
{{--            <div class="form-group col-md-3">--}}
{{--                <label for="inputPassword4">Gatvė</label>--}}
{{--                <input type="text" class="form-control" name="street">--}}
{{--            </div>--}}

{{--            <div class="form-group col-md-3">--}}
{{--                <label for="inputPassword4">Namo nr</label>--}}
{{--                <input type="text" class="form-control" name="house">--}}
{{--            </div>--}}

{{--            <div class="form-group col-md-3">--}}
{{--                <label for="inputPassword4">Buto nr</label>--}}
{{--                <input type="text" class="form-control" name="flat">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <button type="submit" class="btn btn-primary">Kurti</button>--}}
{{--    </form>--}}
</x-app-layout>

