<?php

use App\Models\Oeuvre;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\OeuvreController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\Detail_commandeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Middleware\AdminEmailMiddleware;
use App\Http\Controllers\ArtisteController;

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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Route personnalisée pour afficher les œuvres avec un type spécifique
Route::get('/oeuvres/peinture/{type?}', [OeuvreController::class, 'showPeintures'])
    ->name('oeuvres.peinture');


// Route pour afficher le formulaire de connexion
Route::get('/login', [LoginController::class, 'create'])->name('login');

// Route pour gérer la soumission du formulaire de connexion
Route::post('/login', [LoginController::class, 'store'])->name('login.store');

// Route pour déconnecter l'utilisateur
Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');

// Route pour afficher le formulaire d'inscription
Route::get('/register', [RegisterController::class, 'index'])->name('register');

// Route pour soumettre le formulaire d'inscription
Route::post('/register.store', [RegisterController::class, 'store'])->name('register.store');


//Route pour le dashboards artiste...
Route::get('/artistes/registart', [ArtisteController::class, 'create'])->name('artistes.create'); // Formulaire de création
Route::post('/artistes', [ArtisteController::class, 'store'])->name('artistes.store'); // Enregistrement de l'artiste
// Route::get('/artistes/profil', [ArtisteController::class, 'artbord'])->name('artistes.artbord'); // Tableau de bord de l'artiste (profil)
Route::get('/artistes/{id}', [ArtisteController::class, 'show'])->name('artistes.profil'); // Affichage du profil d'un artiste spécifique
Route::get('/artistes/profil', [ArtisteController::class, 'artbord '])->name('artistes.profil'); // Affichage du profil d'artiste
// Route pour le formulaire d'inscription de l'artiste
// Route pour le tableau de bord de l'artiste
Route::get('artistes/registart', [ArtisteController::class, 'artbord'])->name('artistes.registart');
Route::get('artistes/registart', [ArtisteController::class, 'create'])->name('artistes.artbord');
Route::get('artistes/create', [ArtisteController::class, 'create'])->name('artistes.create');
Route::post('artistes', [ArtisteController::class, 'store'])->name('artistes.store');
Route::get('artistes/{id}', [ArtisteController::class, 'show'])->name('artistes.show');
Route::resource('artistes', ArtisteController::class);


Route::middleware(['auth'])->group(function () {
    // Route vers le tableau de bord de l'admin
    Route::get('admin/dash', [AdminController::class, 'dash'])->name('admin.dash');
    Route::get('/admin/acheteurs', [AdminController::class, 'index'])->name('admin.acheteurs.index');
    Route::get('/admin/acheteurs/c  reate', [AdminController::class, 'create'])->name('admin.acheteurs.create');
    Route::post('store', [AdminController::class, 'store'])->name('admin.acheteurs.store');
    Route::get('{id}/edit', [AdminController::class, 'edit'])->name('admin.acheteurs.edit');
    Route::post('{id}', [AdminController::class, 'destroy'])->name('admin.acheteurs.destroy');
    Route::put('{id}', [AdminController::class, 'update'])->name('admin.acheteurs.update');
    Route::get('{id}', [AdminController::class, 'show'])->name('admin.acheteurs.show');



    // Routes CRUD pour les artistes pour Admin
    Route::prefix('admin/artistes')->group(function () {
        Route::get('/', [AdminController::class, 'listArtistes'])->name('admin.artistes.index');
        Route::get('create', [AdminController::class, 'createArtiste'])->name('admin.artistes.create');
        Route::post('store', [AdminController::class, 'storeArtiste'])->name('admin.artistes.store');
        Route::get('{id}', [AdminController::class, 'showArtiste'])->name('admin.artistes.show');
        Route::get('{id}/edit', [AdminController::class, 'editArtiste'])->name('admin.artistes.edit');
        Route::put('{id}', [AdminController::class, 'updateArtiste'])->name('admin.artistes.update');
        Route::delete('{id}', [AdminController::class, 'deleteArtiste'])->name('admin.artistes.delete');
    });

    // Routes CRUD pour les œuvres dans Admin
    Route::prefix('admin/oeuvres')->group(function () {
        Route::get('/', [AdminController::class, 'listOeuvres'])->name('admin.oeuvres.index');
        Route::get('create', [AdminController::class, 'createOeuvre'])->name('admin.oeuvres.create');
        Route::post('store', [AdminController::class, 'storeOeuvre'])->name('admin.oeuvres.store');
        Route::get('{id}', [AdminController::class, 'showOeuvre'])->name('admin.oeuvres.show');
        Route::get('{id}/edit', [AdminController::class, 'editOeuvre'])->name('admin.oeuvres.edit');
        Route::put('{id}', [AdminController::class, 'updateOeuvre'])->name('admin.oeuvres.update');
        Route::delete('{id}', [AdminController::class, 'deleteOeuvre'])->name('admin.oeuvres.delete');
    });
});

// Resource route 
Route::resource('users', UserController::class)->except(['create', 'store']);
Route::resource('oeuvres', OeuvreController::class);