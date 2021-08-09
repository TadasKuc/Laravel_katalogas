<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="send-message">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Send us a Message</h2>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="contact-form">
                        <form id="contact" action="{{route('categories.update', [$category ->id])}}" method="post">
                            @csrf
                            @method('PATCH')
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="name" type="text" class="form-control" id="name" placeholder="Kategorijos pavadinimas" required="" value="{{$category->name}}">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="description" type="text" class="form-control" id="description" placeholder="Trumpas kategorijos aprašymas" required="" value="{{$category->description}}">
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
                <div class="col-md-4">
                    <ul class="accordion">
                        <li>
                            <a>Accordion Title One</a>
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester consectetur similiqu consectetur.<br><br>Lorem ipsum dolor sit amet, consectetur adipisic elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti elite.</p>
                            </div>
                        </li>
                        <li>
                            <a>Second Title Here</a>
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester consectetur similiqu consectetur.<br><br>Lorem ipsum dolor sit amet, consectetur adipisic elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti elite.</p>
                            </div>
                        </li>
                        <li>
                            <a>Accordion Title Three</a>
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester consectetur similiqu consectetur.<br><br>Lorem ipsum dolor sit amet, consectetur adipisic elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti elite.</p>
                            </div>
                        </li>
                        <li>
                            <a>Fourth Accordion Title</a>
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester consectetur similiqu consectetur.<br><br>Lorem ipsum dolor sit amet, consectetur adipisic elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti elite.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
