<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomepageController;
use App\Http\Livewire\Admin;
use App\Http\Livewire\Admin\Clients;
use App\Models\Booking;
use App\Models\Client;
use App\Models\MaintenanceSub;
use App\Models\Rate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
    return env('MAINTENANCE_MODE')?view('errors.maintenance'):view('welcome');
})->name('home');
Route::post('/contact', [HomepageController::class, 'addContact'])->name('contacts.create');

Route::redirect('dashboard', 'admin/dashboard');
Route::redirect('admin', 'admin/dashboard');


Route::post('maintenance-sub', function(Request $request){
    $request->validate([
        'email'=>'email|required'
    ]);

    $sub = new MaintenanceSub();

    $sub->email = $request->email;

    $sub->save();

    return response('Successfully Subscribed! you will receive a notification when we go live', 200);
})->name('maintenance.sub');

Route::get('bookings/{id}/request', function ($id) {
    return view('bookings.request')->with('rate', Rate::find($id));
})->name('booking.request');

Route::post('bookings/{id}/create', 'App\Http\Controllers\BookingsController@book')->name('booking.create');

Route::prefix('admin')->middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', Admin\Dashboard::class)->name('admin.dashboard');

    /**
     * Clients Routes
     */
    Route::get('/clients', Admin\Clients\Index::class)->name('admin.clients.index');
    Route::get('/clients/create', Admin\Clients\Create::class)->name('admin.clients.create');
    Route::get('/clients/{id}/edit', Admin\Clients\Edit::class)->name('admin.clients.edit');

    /**
     * Blogs Routes
     */
    Route::get('/blogs', Admin\Blogs\Index::class)->name('admin.blogs.index');
    Route::get('/blogs/create', Admin\Blogs\Create::class)->name('admin.blogs.create');
    Route::get('/blogs/{id}/edit', Admin\Blogs\Edit::class)->name('admin.blogs.edit');

    /**
     * Admins Routes
     */
    Route::get('/admins', Admin\Admins\Index::class)->name('admin.admins.index');
    Route::get('/admins/create', Admin\Admins\Create::class)->name('admin.admins.create');
    Route::get('/admins/{id}/edit', Admin\Admins\Edit::class)->name('admin.admins.edit');
    /**
     * Bookings Routes
     */
    Route::get('/bookings', Admin\Bookings\Index::class)->name('admin.bookings.index');
    Route::get('/bookings/create', Admin\Bookings\Create::class)->name('admin.bookings.create');
    Route::get('/bookings/{id}/edit', Admin\Bookings\Edit::class)->name('admin.bookings.edit');

    /**
     * Services Routes
     */
    Route::get('/services', Admin\Services\Index::class)->name('admin.services.index');
    Route::get('/services/create', Admin\Services\Create::class)->name('admin.services.create');
    Route::get('/services/{id}/edit', Admin\Services\Edit::class)->name('admin.services.edit');

    /**
     * Projects Routes
     */
    Route::get('/projects', Admin\Projects\Index::class)->name('admin.projects.index');
    Route::get('/projects/create', Admin\Projects\Create::class)->name('admin.projects.create');
    Route::get('/projects/{id}/edit', Admin\Projects\Edit::class)->name('admin.projects.edit');

    /**
     * Contacts Routes
     */
    Route::get('/contacts', Admin\Contacts\Index::class)->name('admin.contacts.index');
    Route::get('/contacts/create', Admin\Contacts\Create::class)->name('admin.contacts.create');
    Route::get('/contacts/{id}/edit', Admin\Contacts\Edit::class)->name('admin.contacts.edit');

    /**
     * Skills Routes
     */
    Route::get('/skills', Admin\Skills\Index::class)->name('admin.skills.index');
    Route::get('/skills/create', Admin\Skills\Create::class)->name('admin.skills.create');
    Route::get('/skills/{id}/edit', Admin\Skills\Edit::class)->name('admin.skills.edit');

    /**
     * Testimonials Routes
     */
    Route::get('/testimonials', Admin\Testimonials\Index::class)->name('admin.testimonials.index');
    Route::get('/testimonials/create', Admin\Testimonials\Create::class)->name('admin.testimonials.create');
    Route::get('/testimonials/{id}/edit', Admin\Testimonials\Edit::class)->name('admin.testimonials.edit');

    /**
     * Rates Routes
     */
    Route::get('/rates', Admin\Rates\Index::class)->name('admin.rates.index');
    Route::get('/rates/create', Admin\Rates\Create::class)->name('admin.rates.create');
    Route::get('/rates/{id}/edit', Admin\Rates\Edit::class)->name('admin.rates.edit');

    /**
     * Service Categories Routes
     */
    Route::get('/service_categories', Admin\ServiceCategories\Index::class)->name('admin.service_categories.index');
    Route::get('/service_categories/create', Admin\ServiceCategories\Create::class)->name('admin.service_categories.create');
    Route::get('/service_categories/{id}/edit', Admin\ServiceCategories\Edit::class)->name('admin.service_categories.edit');

    /**
     * Payments Routes
     */
    Route::get('/payments', Admin\Payments\Index::class)->name('admin.payments.index');





    Route::post('/about-image', [DashboardController::class, 'change_about'])->name('change_about');
    Route::post('/shirley-image', [DashboardController::class, 'change_shirley'])->name('change_shirley');
    Route::post('/wambui-image', [DashboardController::class, 'change_wambui'])->name('change_wambui');

});
