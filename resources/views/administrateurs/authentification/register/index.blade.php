@extends('administrateurs.authentification.app', ['title' => 'Inscription'])

@section('css')
<style>
    /* Votre CSS personnalisé ici */
    .error-message {
        background-color: rgb(250, 16, 133);
        color: white;
        padding: 10px;
        margin-bottom: 25px;
        display: none; /* Initialement masqué */
    }
</style>
@endsection

@section('content')
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <form action="{{ route('login_admin_success') }}" method="POST" id="registration_form">
                    @csrf
                    <h1>Inscription</h1>
                    <div class="error-message"></div>
                    <div>
                        <input name="nom" type="text" class="form-control" placeholder="Entrez votre nom*" required />
                    </div>
                    <div>
                        <input name="prenom" type="text" class="form-control" placeholder="Entrez votre prenom*" required />
                    </div>
                    <div>
                        <input name="email" type="email" class="form-control" placeholder="Votre adresse email*" required />
                    </div>

                    <div>
                        <input name="password" type="password" class="form-control" placeholder="Password*" required />
                    </div>
                    <div>
                        <input name="confirm_password" type="password" class="form-control" placeholder="Retapez le Password*" required />
                    </div>
                    <div>
                        <button type="submit" class="btn btn-default submit">M'inscrire</button>
                    </div>
                    <div class="clearfix"></div>
                    <div class="separator">
                        <p class="change_link">
                            <p>J'ai déjà un compte,<a href="{{ route('login_admin') }}"> me connecter</a></p>
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
    </div>
</div>

<script>
    // JavaScript pour la vérification de mot de passe
    document.addEventListener('DOMContentLoaded', function () {
        const registrationForm = document.getElementById('registration_form');
        registrationForm.addEventListener('submit', function (event) {
            const passwordField = document.querySelector('input[name="password"]');
            const confirmPasswordField = document.querySelector('input[name="confirm_password"]');
            const passwordValue = passwordField.value;
            const confirmPasswordValue = confirmPasswordField.value;
            const errorDiv = document.querySelector('.error-message');

            if (passwordValue !== confirmPasswordValue) {
                // Les mots de passe ne correspondent pas, afficher un message d'erreur
                errorDiv.textContent = 'Les mots de passe ne correspondent pas.';
                errorDiv.style.display = 'block'; // Affiche l'erreur
                event.preventDefault(); // Empêche la soumission du formulaire
            } else if (passwordValue.length < 8) {
                // La taille du mot de passe est inférieure à 8 caractères, afficher un message d'erreur
                errorDiv.textContent = 'Le mot de passe doit avoir au moins 8 caractères.';
                errorDiv.style.display = 'block'; // Affiche l'erreur
                event.preventDefault(); // Empêche la soumission du formulaire
            } else {
                errorDiv.textContent = ''; // Réinitialise le texte d'erreur
                errorDiv.style.display = 'none'; // Masque l'erreur
            }
        });
    });
</script>
@endsection
