@extends('visiteurs.appHome',['title'=>'Actualites'])
@section('css')
<style>

</style>
@endsection
@section('content')

<!-- Hero Area Start-->
<div class="slider-area ">
    <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="{{asset('/templates/visiteurs/assets/img/hero/about.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>Actualités</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero Area End -->
<!-- Blog Area Start -->
<div class="home-blog-area blog-h-padding" style="padding-top: 7%;padding-bottom: 2%">
    <div class="container">
        <!-- Section Tittle -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-tittle text-center">
                    <span>Actualités</span>
                    <h2>Toute l'actualité</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($actualites as $actualite)
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="home-blog-single mb-30">
                    <div class="blog-img-cap">
                        <div class="blog-img">
                            <img style="width: 100%; height: 300px; object-fit: cover" src="{{asset('storage/'.$actualite -> image_actualite)}}" alt="">
                            <!-- Blog date -->
                            <div class="blog-date text-center">
                                <span>24</span>
                                <p>Now</p>
                            </div>
                        </div>
                        <div class="blog-cap">
                            <p>Par : {{$actualite->name}}</p>
                            <h3 style="color: black"><a href="{{route('news_view_more',['id'=>$actualite -> id])}}" style="font-size: 20px;">{{$actualite->titre}}</a></h3>
                            <a href="{{route('news_view_more',['id'=>$actualite -> id])}}" class="more-btn">Lire »</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="home-blog-single mb-30">
                    <div class="blog-img-cap">
                        <div class="blog-img">
                            <img src="{{asset('/templates/visiteurs/assets/img/blog/home-blog2.jpg')}}" alt="">
                            <!-- Blog date -->
                            <div class="blog-date text-center">
                                <span>24</span>
                                <p>Now</p>
                            </div>
                        </div>
                        <div class="blog-cap">
                            <p>|   Properties</p>
                            <h3><a href="single-blog.html">Footprints in Time is perfect House in Kurashiki</a></h3>
                            <a href="#" class="more-btn">Read more »</a>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>
<!-- Blog Area End -->

@endsection
@section('js')

@endsection
