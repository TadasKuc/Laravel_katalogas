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
                            <h2>Vartotojo duomenų redagavimas</h2>
                        </div>
                    </div>
                    <div class="contact-form">
                        <form id="contact" action="{{route('users.update', $user)}}" method="post">
                            @csrf
                            @method('PATCH')
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="name" type="text" class="form-control" id="name" value="{{$user->name}}" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="email" type="email" class="form-control" id="description" value="{{$user->email}}" required="">
                                    </fieldset>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                                    <fieldset>
                                        <select id="inputState" class="form-control" name="role">
                                            <option  selected>{{$user->role}}</option>
                                            @foreach($roles as $role)
                                                <option value="{{$role}}">{{$role}}</option>--}}
                                            @endforeach
                                        </select>
                                    </fieldset>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                                    <fieldset>
                                        <select id="inputState" class="form-control" name="approved">
                                            <option  selected>{{$user->approved}}</option>
                                            @foreach($status as $stat)
                                                <option value="{{$stat}}">{{$stat}}</option>--}}
                                            @endforeach
                                        </select>
                                    </fieldset>
                                </div>
                                 <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="filled-button">Redaguoti</button>
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
