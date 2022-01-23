<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\Clients;
use App\Http\Livewire\Admin\Admins;
use App\Http\Livewire\Admin\Blogs;
use App\Http\Livewire\Admin\Contacts;
use App\Http\Livewire\Admin\Portfolios;
use App\Http\Livewire\Admin\Services;
use App\Http\Livewire\Admin\Skills;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('web')->group(function() {


});


Route::redirect('dashboard', 'admin/dashboard');



Route::prefix('admin')->middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', function(){
        return view('dashboard');
    })->name('dashboard');

    Route::get('/clients', Clients\Index::class);
    Route::get('/clients/create', Clients\Create::class);
    Route::get('/clients/{id}/edit', Clients\Edit::class);

    Route::get('/blogs', Blogs\Index::class);
    Route::get('/blogs/create', Blogs\Create::class);
    Route::get('/blogs/{id}/edit', Blogs\Edit::class);

    Route::get('/admins', Admins\Index::class);
    Route::get('/admins/create', Admins\Create::class);
    Route::get('/admins/{id}/edit', Admins\Edit::class);

    Route::get('/services', Services\Index::class);
    Route::get('/services/create', Services\Create::class);
    Route::get('/services/{id}/edit', Services\Edit::class);

    Route::get('/portfolios', Portfolios\Index::class);
    Route::get('/portfolios/create', Portfolios\Create::class);
    Route::get('/portfolios/{id}/edit', Portfolios\Edit::class);

    Route::get('/contacts', Contacts\Index::class);
    Route::get('/contacts/create', Contacts\Create::class);
    Route::get('/contacts/{id}/edit', Contacts\Edit::class);

    Route::get('/skills', Skills\Index::class);
    Route::get('/skills/create', Skills\Create::class);
    Route::get('/skills/{id}/edit', Skills\Edit::class);


});
