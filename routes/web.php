<?php

use App\Http\Controllers\ProduitController;
use App\Models\Categorie;
use App\Models\Produit;
use App\Models\User;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('accueil');
})->name('accueil');

Route::get('/login', function () {
    return view('dashboard.login');
})->name('connexion');

//Route::get('/modify/{slug}-{id}', function (string $slug, string $id, Request $request) {
//    return [
//      "slug" => $slug,
//      "id" => $id,
//      "name" => $request->input('name')
//    ];
//})->where([
//    'id' => '[0-9]+',
//    'slug' => '[a-z0-9\-]+',
//])->name('login');
Route::prefix('dashboar')->group(function () {
    Route::get('/', function () {
        $produits = Produit::all();
        $users = User::all();
        $categories = Categorie::all();
        return view('dashboard.home')->with('data', compact('produits', 'users', 'categories' ));
    })->name('dashboard');

    Route::get('/product-detail/{slug}-{produit}', [ProduitController::class, 'show'])->where([
        'produit' => '[0-9]+',
        'slug' => '[a-z0-9\-]+',
    ])->name('view.details');

    Route::get('/product-modify/{slug}-{produit}', [ProduitController::class, 'edit'])->where([
        'id' => '[0-9]+',
        'slug' => '[a-z0-9\-]+',
    ])->name('modify.details');

    Route::put('/product-modify/{slug}-{produit}', [ProduitController::class, 'update'])->where([
        'produit' => '[0-9]+',
        'slug' => '[a-z0-9\-]+',
    ])->name('modify.produit');

    Route::delete('/product-delete/{slug}-{produit}', [ProduitController::class, 'destroy'])->where([
        'produit' => '[0-9]+',
        'slug' => '[a-z0-9\-]+',
    ])->name('delete.produit');

    Route::post('/produits/add', [ProduitController::class, 'store'])->name('create.produits');
})->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
