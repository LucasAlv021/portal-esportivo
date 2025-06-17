<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiteController;

// --- ROTAS PÚBLICAS (Acessíveis a todos) ---
Route::get('/', [SiteController::class, 'index'])->name('site.index');
Route::get('/futebol', [SiteController::class, 'futebol'])->name('site.futebol');
Route::get('/basquete', [SiteController::class, 'basquete'])->name('site.basquete');
Route::get('/{esporte}/produtos', [SiteController::class, 'produtos'])->name('site.produtos');
Route::get('/{esporte}/contato', [SiteController::class, 'contato'])->name('site.contato');


// --- ROTAS QUE PRECISAM DE LOGIN ---

// O Laravel Breeze cria um 'dashboard' como exemplo de página que precisa de login.
Route::get('/dashboard', function () {
    return redirect('/'); // Redireciona para a página inicial
})->middleware(['auth', 'verified'])->name('dashboard');

// Rotas para o usuário gerenciar o próprio perfil (editar, apagar)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// --- ARQUIVO DE ROTAS DO BREEZE ---
// Este comando inclui todas as rotas de /login, /register, /logout, etc.
// É crucial que ele esteja aqui.
require __DIR__.'/auth.php';
