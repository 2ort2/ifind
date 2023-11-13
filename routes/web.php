<?php

use App\Http\Controllers\administrateurs\AccueilController;
use App\Http\Controllers\administrateurs\authentification\LoginController;
use App\Http\Controllers\administrateurs\messages\MessageController;
use App\Http\Controllers\administrateurs\recruteurs\RecruteurController;
use App\Http\Controllers\visiteurs\actualites\ActualiteController;
use App\Http\Controllers\visiteurs\apropos\AproposController;
use App\Http\Controllers\visiteurs\authentification\AuthController;
use App\Http\Controllers\visiteurs\contacts\ContactController;
use App\Http\Controllers\visiteurs\jobs\JobsController;
use App\Http\Controllers\visiteurs\newsletters\NewsLetterController;
use App\Http\Controllers\visiteurs\VisiteurController;
use App\Models\Newsletter;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',[VisiteurController::class, 'index'])->name('accueil');
Route::get('/apropos',[AproposController::class, 'index'])->name('apropos');
Route::get('/actualites',[ActualiteController::class, 'index'])->name('actualites');
Route::get('/contats',[ContactController::class, 'index'])->name('contacts');
Route::get('/jobs-disponibles',[JobsController::class, 'index'])->name('jobs');
Route::get('/login-user',[AuthController::class, 'login'])->name('login_user');
Route::get('/register-user',[AuthController::class, 'register'])->name('register_user');
Route::match(['get','post'],'/envoyer-message-a-equipe-ifind',[ContactController::class, 'envoyer_message'])->name('envoyer_message');
Route::match(['get','post'],'/newsletters',[NewsLetterController::class, 'add_news_letter'])->name('add_news_letter');




























Route::match(['get','post'], '/Recruteurs-accueil', [App\Http\Controllers\recruteurs\AccueilController::class, 'index'])->name('accueil_recruteur');
Route::match(['get','post'], '/Recruteurs-login', [App\Http\Controllers\recruteurs\authentification\AuthController::class, 'login'])->name('login_recruteur');
Route::match(['get','post'], '/Recruteurs-register', [App\Http\Controllers\recruteurs\authentification\AuthController::class, 'register'])->name('register_recruteur');
Route::match(['get','post'], '/Recruteurs-register-success', [App\Http\Controllers\recruteurs\authentification\AuthController::class, 'recruteur_register'])->name('recruteur_register');
Route::match(['get','post'], '/4-Recruteurs-login-success', [App\Http\Controllers\recruteurs\authentification\AuthController::class, 'recruteur_login_success'])->name('recruteur_login_success');
Route::match(['get','post'], '/Recruteurs-logout-success', [App\Http\Controllers\recruteurs\authentification\AuthController::class, 'logout'])->name('logout_recruteur');





























// LISTES DES ROUTES POUR LE SITE ADMIN
Route::get('/1012/I-find/Admin-web-site/Login', [LoginController::class, 'login'])->name('login_admin');
Route::match(['get', 'post'], '/1012/I-find/Admin-web-site/Register-success', [LoginController::class, 'admin_register'])->name('login_admin_success');
Route::match(['get', 'post'], '/1012/I-find/Admin-web-site/login-success', [LoginController::class, 'admin_login_success'])->name('admin_login_success');
Route::get('/1-15/I-find/Admin-web-site/Register', [LoginController::class, 'register'])->name('register_admin');

Route::middleware(['auth'])->group(function () {
    Route::get('/404/1-find/Admin-web-site/Accueil', [AccueilController::class, 'index'])->name('accueil_admin');
    Route::get('/1-15/I-find/Admin-web-site/liste-messages-non-lu', [MessageController::class, 'liste_des_messages_non_lus'])->name('liste_des_messages_non_lus');
    Route::get('/1-15/I-find/Admin-web-site/liste-messages-non-repondu', [MessageController::class, 'liste_des_messages_non_repondu'])->name('liste_des_messages_non_repondu');
    Route::get('/1-15/I-find/Admin-web-site/{id}-message-visiteurs', [MessageController::class, 'lire_message_visiteur'])->name('lire_message_visiteur');
    Route::get('/1-15/I-find/Admin-web-site/delete-message-visiteurs-{id}', [MessageController::class, 'lire_message_visiteur_delete'])->name('lire_message_visiteur_delete');
    Route::get('/1-15/I-find/Admin-web-site/formaulaire-add-news', [App\Http\Controllers\administrateurs\actualites\ActualiteController::class, 'formulaire_actualite'])->name('formulaire_actualite');
    Route::match(['get', 'post'], '/Admin-web-site/add-news', [App\Http\Controllers\administrateurs\actualites\ActualiteController::class, 'ajouter_actualite'])->name('ajouter_actualite');
    Route::match(['get', 'post'], '/Admin-web-site/news-list', [App\Http\Controllers\administrateurs\actualites\ActualiteController::class, 'liste_des_actualites'])->name('liste_des_actualites');
    Route::match(['get', 'post'], '/Admin-web{id}45-site/news-delete', [App\Http\Controllers\administrateurs\actualites\ActualiteController::class, 'supprimer_actualite'])->name('supprimer_actualite');
    Route::match(['get', 'post'], '/Admin-web2{id}45-site/news-publish', [App\Http\Controllers\administrateurs\actualites\ActualiteController::class, 'publier_actualite'])->name('publier_actualite');
    Route::match(['get', 'post'], '/Admin-web7{id}5-site/news-no-publish', [App\Http\Controllers\administrateurs\actualites\ActualiteController::class, 'annuler_publication_actualite'])->name('annuler_publication_actualite');
    Route::match(['get', 'post'], '/Admin-web78{id}50o-site/news-edit', [App\Http\Controllers\administrateurs\actualites\ActualiteController::class, 'editer_actualite'])->name('editer_actualite');
    Route::match(['get', 'post'], '/Admin-web-site/edit-news-succes', [App\Http\Controllers\administrateurs\actualites\ActualiteController::class, 'modifier_actualite'])->name('modifier_actualite');
    Route::match(['get', 'post'], '/logout-out-admin', [LoginController::class, 'logout'])->name('logout');
    Route::match(['get', 'post'], '/gestion-des-recruteurs-comptes-non-confirmes', [RecruteurController::class, 'index'])->name('liste_compte_non_confirme');
    Route::match(['get', 'post'], '/gestion-des-3-recruteurs-activer-compte-{id}', [RecruteurController::class, 'activer_compte_recruteur'])->name('activer_compte_recruteur');
    Route::match(['get', 'post'], '/{id}-gestion-des-recruteurs-desactiver-compte-12', [RecruteurController::class, 'desactiver_compte_recruteur'])->name('desactiver_compte_recruteur');
    Route::match(['get', 'post'], '/gestion-3-des-2{id}-recruteurs-7-supprimer-un-compte', [RecruteurController::class, 'supprimer_compte_recruteur'])->name('supprimer_compte_recruteur');

});
