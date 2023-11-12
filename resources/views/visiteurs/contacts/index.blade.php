@extends('visiteurs.appHome',['title'=>'Contact'])
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
                        <h2>Contact</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Hero Area End -->
<!-- ================ contact section start ================= -->
<section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Contactez-nous</h2>
                </div>
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="{{route('envoyer_message')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="nom" type="text" placeholder="Nom et prenom*" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="email" type="email" placeholder="Email*" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="objet" type="text" placeholder="Objet*">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="contenu" id="message" cols="30" rows="9" placeholder="Message" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm boxed-btn">Envoyer</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>TOGO, Lomé.</h3>
                            <p>Agoé, BP12</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>+228 90909090</h3>
                            <p>Lundi à Samedi - 07h à 17h</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>ifindjob@gmail.com</h3>
                            <p>Nous disponible pour vous.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

@endsection
@section('js')

@endsection
