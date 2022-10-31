<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ServiceCategoriesComponent;
use App\Http\Livewire\ServiceByCategoryComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Customer\CustomerDashboardComponent;
use App\Http\Livewire\Sprovider\SproviderDashboardComponent;
use App\Http\Livewire\Admin\AdminServiceCategoryComponent;
use App\Http\Livewire\Admin\AdminAddServiceCategoryComponent;
use App\Http\Livewire\Admin\AdminServicesComponent;
use App\Http\Livewire\Admin\AdminAllBookingComponent;
use App\Http\Livewire\Admin\AdminAllServiceComponent;
use App\Http\Livewire\CheckoutComponent;

use App\Http\Livewire\ProductCategoriesComponent;
use App\Http\Livewire\Admin\AdminAddServiceComponent;
use App\Http\Livewire\Admin\AdminEditServiceCategoryComponent;
use App\Http\Livewire\Admin\AdminEditServiceComponent;
use App\Http\Livewire\ServiceDetailsComponent;
use App\Http\Livewire\AllServiceComponent;
use App\Http\Livewire\ServiceBookingComponent;
use App\Http\Livewire\MyBookingComponent;
use App\Http\Livewire\BookingDetailComponent;
use App\Http\Livewire\UserShowProfileComponent;

use App\Http\Livewire\AddPetComponent;
use App\Http\Livewire\AllPetComponent;
use App\Http\Livewire\EditPetComponent;
use App\Http\Livewire\ReviewComponent;
use App\Http\Livewire\NewsComponent;
use App\Http\Livewire\AddNewsComponent;
use App\Http\Livewire\ShowNewsComponent;
use App\Http\Livewire\Sprovider\SproviderBookingComponent;


use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AdminAllServiceController;

use Laravel\Socialite\Facades\Socialite;
use App\Http\Livewire\BookingCanceledComponent;
use App\Http\Livewire\BookingOrderedComponent;
use App\Http\Livewire\MybookingCancelComponent;
use App\Http\Livewire\MybookingOrderedComponent;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', HomeComponent::class)->name('home');

// Google login
Route::get('login/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);

// Facebook login
Route::get('login/facebook', [App\Http\Controllers\Auth\LoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleFacebookCallback']);

//Route::get('/room-service', RoomServiceComponent::class)->name('room.service');
Route::get('/checkout', CheckoutComponent::class)->name('checkout');
//Route::get('/room/{slug}', RoomDetailComponent::class)->name('room.details');
Route::get('/service/{service_slug}', ServiceDetailsComponent::class)->name('home.service_details');

//Route::get('/service/booking', ServiceDetailsComponent::class)->name('home.add_service_booking');
//Route::get('/service-booking', ServiceBookingComponent::class)->name('service_booking');

//Route::get('/product-categories',ProductCategoriesComponent::class)->name('home.product_categories');
Route::get('/service-categories', ServiceCategoriesComponent::class)->name('home.service_categories');
Route::get('/{category_slug}/services', ServiceByCategoryComponent::class)->name('home.service_by_category');

Route::get('/service-all', AllServiceComponent::class)->name('service.all');

// news
Route::get('/my-news', NewsComponent::class)->name('news.all');
Route::get('/add-news', AddNewsComponent::class)->name('news.add');
Route::get('/news-all', ShowNewsComponent::class)->name('show.news');

// Search
Route::get('/autocomplete', 'App\Http\Controllers\SearchController@autocomplete')->name('autocomplete');
Route::post('/search', 'App\Http\Controllers\SearchController@searchServices')->name('searchServices');

//Customer
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
  Route::get('/service-booking/service_id={service_id}', ServiceBookingComponent::class)->name('service_booking');
  Route::get('/my-booking/{booking_id}', BookingDetailComponent::class)->name('booking.detail');
  Route::get('/customer/dashboard', CustomerDashboardComponent::class)->name('customer.dashboard');

  // profile
  Route::get('/profile', 'App\Http\Controllers\ProfileController@profile')->name('profile');
  Route::post('/profile/update', 'App\Http\Controllers\ProfileController@profileUpdate')->name('profile-update');

  Route::get('/change/password', 'App\Http\Controllers\ProfileController@changePasswordform')->name('change.password');
  Route::post('/update-password', 'App\Http\Controllers\ProfileController@updatePassword')->name('update.password');
  //  Route::get('/profile/show',UserShowProfileComponent::class)->name('profile-show');
  // pet
  /*  Route::get('/pet/all','App\Http\Controllers\PetsController@index')->name('pets.all');
    Route::post('/pet/add',[PetsController::class,'store'])->name('addPet');
    Route::get('edit-pet/{id}', [PetsController::class, 'edit']);
    Route::put('update-pet/{id}', [PetsController::class, 'update']);
    Route::delete('delete-pet/{id}', [PetsController::class, 'destroy']); */


  // review
  Route::get('/review/{service_id}', ReviewComponent::class)->name('review.service');

  Route::get('/pet-all', AllPetComponent::class)->name('all.pet');
  Route::get('/pet/add', AddPetComponent::class)->name('add.pet');
  Route::get('/pet/edit/{pet_id}', EditPetComponent::class)->name('edit.pet');

  // booking
  //  Route::get('/service-booking/service_id={service_id}', ServiceBookingComponent::class)->name('service_booking');
  Route::get('/my-booking', MyBookingComponent::class)->name('my_booking');
  Route::get('/my-booking-canceled', MybookingCancelComponent::class)->name('my_booking_canceled');
  Route::get('/my-booking-ordered', MybookingOrderedComponent::class)->name('my_booking_ordered');

  //   Route::get('/booking/all',[BookingController::class,'index'])->name('booking.all');
  //   Route::post('/booking/add/{service_id}',[BookingController::class,'store'])->name('addBooking');
});


//Admin
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function () {
  Route::resource('users', UserController::class);

  Route::get('/users.index', 'App\Http\Controllers\UserController@index')->name('users');
  Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
  Route::get('/admin/service-categories', AdminServiceCategoryComponent::class)->name('admin.service_categories');
  Route::get('/admin/service-category/add', AdminAddServiceCategoryComponent::class)->name('admin.add_service_category');
  //Route::get('/admin/all-services',AdminServicesComponent::class)->name('admin.all_services');
  Route::get('/admin/services-category/edit/{category_id}', AdminEditServiceCategoryComponent::class)->name('admin.edit_services_category');

  // Route::get('/admin/service/add' ,AdminAddServiceComponent::class)->name('admin.add_service');
  // Route::get('/admin/services/edit/{service_slug}',AdminEditServiceComponent::class)->name('admin.edit_service');

  Route::get('/admin/service-all', 'App\Http\Controllers\AdminAllServiceController@index')->name('king.kong');

  // service
  Route::get('/admin/all-service', AdminAllServiceComponent::class)->name('all.service');
  // booking
  // Route::get('/service-booking', ServiceBookingComponent::class)->name('service_booking');
  Route::get('/all-booking', AdminAllBookingComponent::class)->name('all.booking');
});

//Service Provider
Route::middleware(['auth:sanctum', 'verified', 'authsprovider'])->group(function () {

  Route::get('/sprovider/dashboard', SproviderDashboardComponent::class)->name('sprovider.dashboard');
  /* Route::get('/sprovider/room-service','App\Http\Controllers\SproviderRoomController@index')->name('sprovider.room_service');
    Route::post('/room/add',[SproviderRoomController::class,'store'])->name('addRoom');
    Route::get('/room/edit/{id}','App\Http\Controllers\SproviderRoomController@edit');
    Route::post('/room/update/{id}','App\Http\Controllers\SproviderRoomController@update');*/

  Route::get('/sprovider/my-services', AdminServicesComponent::class)->name('sprovider.services');
  Route::get('/sprovider/service/add', AdminAddServiceComponent::class)->name('admin.add_service');
  Route::get('/sprovider/services/edit/{service_slug}', AdminEditServiceComponent::class)->name('admin.edit_service');

  // booking
  Route::get('/sprovider-orders', SproviderBookingComponent::class)->name('sprovider.order');
  Route::get('/sprovider/my-orders-ordered', BookingOrderedComponent::class)->name('sprovider.orders_ordered');
  Route::get('/sprovider/my-orders-canceled', BookingCanceledComponent::class)->name('sprovider.orders_canceled');
  // Route::get('/service-booking', ServiceBookingComponent::class)->name('service_booking');
});
