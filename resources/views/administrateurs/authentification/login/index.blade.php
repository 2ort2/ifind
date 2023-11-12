@extends('administrateurs.authentification.app',['title'=>'Login'])
@section('css')
<style>

</style>
@endsection
@section('content')

<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
      <div class="animate form login_form">
        <section class="login_content">
          <form action="{{route('login')}}" method="POST">
            @csrf
            <h1>Connexion</h1>
            <div>
              <input name="email" type="text" class="form-control" placeholder="Votre adresse email*" required/>
            </div>
            <div>
              <input name="password" type="password" class="form-control" placeholder="Mot de passe*" required/>
            </div>
            <div>
              <button type="submit" class="btn btn-default submit">Me connecter</button>
              <a class="reset_pass" href="#">Mot de passe oublié?</a>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
              <p class="change_link">N'avez-vous pas un compte?
                <a href="{{route('register_admin')}}" class="to_register"> Créer un compte </a>
              </p>

              <div class="clearfix"></div>
              <br />

              <div>
                <h1><i class="fa fa-paw"></i> I-FIND!</h1>
                <p>©2016 All Rights Reserved. Groupe Blaise - <a href="">Julien -Shalom</a>. Termes et conditions</p>
              </div>
            </div>
          </form>
        </section>
      </div>

      <div id="register" class="animate form registration_form">
        <section class="login_content">
          <form>
            <h1>Créer un compte</h1>

            <div>
              <input type="text" class="form-control" placeholder="Username" required="" />
            </div>
            <div>
              <input type="email" class="form-control" placeholder="Email" required="" />
            </div>
            <div>
              <input type="password" class="form-control" placeholder="Password" required="" />
            </div>
            <div>
              <a class="btn btn-default submit" href="index.html">Submit</a>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
              <p class="change_link">Already a member ?
                <a href="#signin" class="to_register"> Log in </a>
              </p>

              <div class="clearfix"></div>
              <br />

              <div>
                <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 4 template. Privacy and Terms</p>
              </div>
            </div>
          </form>
        </section>
      </div>
    </div>
  </div>

@endsection
@section('js')

@endsection
