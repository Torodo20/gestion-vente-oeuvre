<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OeuvreController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\Detail_commandeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Middleware\AdminEmailMiddleware;




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
// Route pour la page d'accueil avec la vue welcome
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Liste des artistes
Route::get('/artistes', [UserController::class, 'index'])->name('artistes.index');

// Détails d'un artiste et ses œuvres
Route::get('/artiste/{id}', [UserController::class, 'show'])->name('artiste.details');

// Passer une commande pour une œuvre
Route::post('/commande', [CommandeController::class, 'store'])->name('commandes.store');

// Dashboard pour l'admin avec middleware
Route::middleware(['auth', AdminEmailMiddleware::class])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    
    // Routes pour la gestion des utilisateurs
    Route::get('/users', [AdminController::class, 'users'])->name('users');
    Route::get('/users/create', [AdminController::class, 'createUser'])->name('users.create');
    Route::post('/users', [AdminController::class, 'storeUser'])->name('users.store');
    Route::get('/users/{user}/edit', [AdminController::class, 'editUser'])->name('users.edit');
    Route::put('/users/{user}', [AdminController::class, 'updateUser'])->name('users.update');
    Route::delete('/users/{user}', [AdminController::class, 'deleteUser'])->name('users.delete');

    // Routes pour la gestion des œuvres
    Route::get('/oeuvres', [AdminController::class, 'oeuvres'])->name('oeuvres');
    Route::get('/oeuvres/create', [AdminController::class, 'createOeuvre'])->name('oeuvres.create');
    Route::post('/oeuvres', [AdminController::class, 'storeOeuvre'])->name('oeuvres.store');
    Route::get('/oeuvres/{oeuvre}/edit', [AdminController::class, 'editOeuvre'])->name('oeuvres.edit');
    Route::put('/oeuvres/{oeuvre}', [AdminController::class, 'updateOeuvre'])->name('oeuvres.update');
    Route::delete('/oeuvres/{oeuvre}', [AdminController::class, 'deleteOeuvre'])->name('oeuvres.delete');

    // Routes pour la gestion des commandes
    Route::get('/commandes', [AdminController::class, 'commandes'])->name('commandes');
    Route::get('/commandes/{commande}', [AdminController::class, 'showCommande'])->name('commandes.show');
    Route::delete('/commandes/{commande}', [AdminController::class, 'deleteCommande'])->name('commandes.delete');
});

// Routes de profil
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Routes pour la vérification des emails
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

// Route pour renvoyer le lien de vérification
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Un nouveau lien de vérification a été envoyé à votre adresse e-mail.');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

// Routes pour la vérification des emails via controller
Route::middleware(['auth', 'verified'])->group(function () {
    Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])->name('verification.send');
});

require __DIR__.'/auth.php';
