{{--@extends('layouts.master')--}}
{{--@section('content')--}}
<x-app-layout>

    <div class="latest-products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Naujausios dalys</h2>
                        <a href="products.html">Visos dalys <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                @foreach($parts as $part)
                    <div class="col-md-4">
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

{{--    <div class="best-features">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12">--}}
{{--                    <div class="section-heading">--}}
{{--                        <h2>About Sixteen Clothing</h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6">--}}
{{--                    <div class="left-content">--}}
{{--                        <h4>Looking for the best products?</h4>--}}
{{--                        <p><a rel="nofollow" href="https://templatemo.com/tm-546-sixteen-clothing" target="_parent">This template</a> is free to use for your business websites. However, you have no permission to redistribute the downloadable ZIP file on any template collection website. <a rel="nofollow" href="https://templatemo.com/contact">Contact us</a> for more info.</p>--}}
{{--                        <ul class="featured-list">--}}
{{--                            <li><a href="#">Lorem ipsum dolor sit amet</a></li>--}}
{{--                            <li><a href="#">Consectetur an adipisicing elit</a></li>--}}
{{--                            <li><a href="#">It aquecorporis nulla aspernatur</a></li>--}}
{{--                            <li><a href="#">Corporis, omnis doloremque</a></li>--}}
{{--                            <li><a href="#">Non cum id reprehenderit</a></li>--}}
{{--                        </ul>--}}
{{--                        <a href="about.html" class="filled-button">Read More</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6">--}}
{{--                    <div class="right-image">--}}
{{--                        <img src="assets/images/feature-image.jpg" alt="">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


{{--    <div class="call-to-action">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12">--}}
{{--                    <div class="inner-content">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-8">--}}
{{--                                <h4>Creative &amp; Unique <em>Sixteen</em> Products</h4>--}}
{{--                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis amet elite author nulla.</p>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-4">--}}
{{--                                <a href="#" class="filled-button">Purchase Now</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


{{--    <footer>--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12">--}}
{{--                    <div class="inner-content">--}}
{{--                        <p>Copyright &copy; 2020 Sixteen Clothing Co., Ltd.--}}

{{--                            - Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">TemplateMo</a></p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </footer>--}}

</x-app-layout>
{{--@endsection--}}


