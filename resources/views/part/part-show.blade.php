
<div class="card" style="width: 18rem; margin: 5px;">
    @foreach($part->image as $img)
        <img class="card-img-top"
             src="{{asset('storage/image/'.$img->path) }}"
             alt="Card image cap"
             style="width: 18rem; height: 15rem;">

    @endforeach
    <div class="card-body">
        <h5 class="card-title">{{$part->title}}</h5>
        <p class="card-text">{{$part->description}}</p>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">{{$part->car->model}}</li>
        <li class="list-group-item">{{$part->category->name}}</li>
        <li class="list-group-item">{{$part->mainCategory($part->category->category_id)}}</li>
    </ul>
    <div class="card-body">
        <a href="#" class="card-link">Another link</a>
    </div>
    {{$part->user->name}}
</div>
