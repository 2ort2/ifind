@extends('visiteurs.appHome',['title'=>'Connexion'])
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
                        <h2>Connexion</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Hero Area End -->
<!-- ================ contact section start ================= -->
<section class="contact-section" style="padding-top: 6%;">
        <div class="container">
            <div class="row">
                <div class="col-md-4">

                </div>
                <div class="col-md-4">
                    <div class="col-md-12">
                        <h1 style="text-align: center;padding-bottom: 5%" class="contact-title">Connectez-vous</h1>
                    </div>
                    <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email*'" placeholder="Votre adresse email*">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password*'" placeholder="Votre mot de passe*">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <p style="text-align: center">Avez-vous un compte recruteur? <a style="color: darkblue" href="{{route('login_recruteur')}}">Connectez-vous.</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-12" style="padding-left: 20%">
                            <button type="submit" class="button button-contactForm boxed-btn">Se connecter</button>
                        </div>
                    </form>
                </div>

                <div class="col-md-4">

                </div>
            </div>
        </div>
</section>

@endsection
@section('js')

@endsection
