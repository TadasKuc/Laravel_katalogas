<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <table class="table" style="width: 600px">
        <tr>
            <th>name</th>
            <th>email</th>
            <th>role</th>
            <th>approved</th>
            <th>EDIT</th>
            <th>X</th>

        </tr>

        @foreach($usersList as $user)
            <tr class="">
                <td><a href="">{{$user->name}} </a></td>
                <td>{{$user->email}} </td>
                <td>{{$user->role}} </td>
                <td>{{$user->approved}} </td>
                <td><a href="{{ route('users.edit', $user) }}" style="color:blue">-Edit-</a> </td>
                <td><a href="{{ route('users.destroy', $user) }}" style="color:red">-X-</a> </td>
{{$user->address->city}}
            </tr>

            @endforeach

    <h1><a href="{{route('dashboard')}}">Grižti į administratoriaus puslapį</a></h1>

</x-app-layout>

