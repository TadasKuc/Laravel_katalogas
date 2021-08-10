<x-app-layout>

    <div class="latest-products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Naujausios dalys</h2>
                        <a href="{{ url('/') }}">Visos dalys <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                @foreach($parts as $part)
                    <div class="col-md-3">
                        <div class="product-item">
                            @foreach($part->image as $img)
                                <img class="card-img-top" style="max-height: 200px;" src="{{asset('storage/image/'.$img->path) }}" alt="Card image cap">
                            @endforeach
                            <div class="down-content">
                                <a href="{{route('parts.show', ['part' => $part])}}"><h4>{{$part->title}}</h4></a>
                                <h6>{{$part->price}} Eur</h6>
                                <p>{{$part->description}}</p>
                                <span>{{$part->car->manufacturer}} - {{$part->car->model}} - </span>
                            </div>
                        </div>

                    </div>
                @endforeach


            </div>
        </div>
    </div>
    <div class="categories">
        <div class="container">
            <div class="row">
                @foreach($categories as $cat)
                    <div class="col-md-3 mb-3">
                        <div class="category-item">
                            <a href="/?category={{$cat->id}}">{{$cat->name}}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</x-app-layout>


