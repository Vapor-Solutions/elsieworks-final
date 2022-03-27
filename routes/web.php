<?php

use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\Clients;
use App\Http\Livewire\Admin\Admins;
use App\Http\Livewire\Admin\Blogs;
use App\Http\Livewire\Admin\Contacts;
use App\Http\Livewire\Admin\Portfolios;
use App\Http\Livewire\Admin\Services;
use App\Http\Livewire\Admin\Skills;
use App\Models\MaintenanceSub;
use Illuminate\Http\Request;

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
})->name('home');
Route::post('/contact', [HomepageController::class, 'addContact'])->name('contacts.create');

Route::redirect('dashboard', 'admin/dashboard');


Route::post('maintenance-sub', function(Request $request){
    $request->validate([
        'email'=>'email|required'
    ]);

    $sub = new MaintenanceSub();

    $sub->email = $request->email;

    $sub->save();

    return response('Successfully Subscribed! you will receive a notification when we go live', 200);
})->name('maintenance.sub');


Route::prefix('admin')->middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', function(){
        return view('dashboard');
    })->name('admin.dashboard');

    Route::get('/clients', Clients\Index::class)->name('admin.clients.index');
    Route::get('/clients/create', Clients\Create::class)->name('admin.clients.create');
    Route::get('/clients/{id}/edit', Clients\Edit::class)->name('admin.clients.edit');

    Route::get('/blogs', Blogs\Index::class)->name('admin.blogs.index');
    Route::get('/blogs/create', Blogs\Create::class)->name('admin.blogs.create');
    Route::get('/blogs/{id}/edit', Blogs\Edit::class)->name('admin.blogs.edit');

    Route::get('/admins', Admins\Index::class)->name('admin.admins.index');
    Route::get('/admins/create', Admins\Create::class)->name('admin.admins.create');
    Route::get('/admins/{id}/edit', Admins\Edit::class)->name('admin.admins.edit');

    Route::get('/services', Services\Index::class)->name('admin.services.index');
    Route::get('/services/create', Services\Create::class)->name('admin.services.create');
    Route::get('/services/{id}/edit', Services\Edit::class)->name('admin.services.edit');

    Route::get('/portfolios', Portfolios\Index::class)->name('admin.portfolios.index');
    Route::get('/portfolios/create', Portfolios\Create::class)->name('admin.portfolios.create');
    Route::get('/portfolios/{id}/edit', Portfolios\Edit::class)->name('admin.portfolios.edit');

    Route::get('/contacts', Contacts\Index::class)->name('admin.contacts.index');
    Route::get('/contacts/create', Contacts\Create::class)->name('admin.contacts.create');
    Route::get('/contacts/{id}/edit', Contacts\Edit::class)->name('admin.contacts.edit');

    Route::get('/skills', Skills\Index::class)->name('admin.skills.index');
    Route::get('/skills/create', Skills\Create::class)->name('admin.skills.create');
    Route::get('/skills/{id}/edit', Skills\Edit::class)->name('admin.skills.edit');


});
