<div class="col-md-2">
    <ul class="accordion">
        <li class=""><a href="{{route('users.index')}}">Vartotojų peržiūra</a></li>
        <li><a href="{{route('cars.create')}}">Pridėti automobilį</a></li>
        {{--        @if(\Illuminate\Support\Facades\Auth::user()->isAdmin())--}}
        <li><a href="{{route('cars.index')}}">Automobilių sąrašas</a></li>
        {{--        @endif--}}
        <li><a href="{{ route('parts.create') }}">Pridėti dalį</a></li>
        <li><a href="{{ route('parts.index') }}">Daliu sarasas</a></li>
        <li><a href="{{route('address.create')}}">Prideti adresa</a></li>
        <li><a href="{{route('categories.create')}}">Prideti kategorija</a></li>
        <li><a href="{{route('categories.index')}}">Kategorijų sąrašas</a></li>
    </ul>
</div>
