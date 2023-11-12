@extends('recruteurs.authentification.app',['title'=>'Connexion'])
@section('css')
<style>

</style>
@endsection
@section('content')

<main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
              <div class="card card-plain">
                <div class="card-header pb-0 text-start">
                  <h4 class="font-weight-bolder" style="text-align: center">Connexion</h4>
                  <p class="mb-0" style="text-align: center">Verifier que vos informations sont correcte avant de valider</p>
                </div>
                <div class="card-body">
                  <form role="form">
                    <div class="mb-3">
                      <input type="email" class="form-control form-control-lg" placeholder="Votre email*" aria-label="Email">
                    </div>
                    <div class="mb-3">
                      <input type="email" class="form-control form-control-lg" placeholder="Mot de passe*" aria-label="Password">
                    </div>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="rememberMe">
                      <label class="form-check-label" for="rememberMe">Se souvenir de moi</label>
                    </div>
                    <div class="text-center">
                      <button style="background-color: #344767" type="button" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Me connecter</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-4 text-sm mx-auto">
                    Vous n'avez pas de compte?
                    <a href="{{route('register_recruteur')}}" class="text-primary text-gradient font-weight-bold">Créer un compte</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signin-ill.jpg');
          background-size: cover;">
                <span class="mask bg-gradient-primary opacity-6"></span>
                <h4 class="mt-5 text-white font-weight-bolder position-relative">"Bienvenu à IFIND"</h4>
                <p class="text-white position-relative">Une plateforme vous permettant de dénifier des recrus talentueux, pour le bien de votre entreprise.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

@endsection
@section('js')

@endsection
