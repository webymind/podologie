<?php

use Spatie\GoogleCalendar\Event;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\GuestController;

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
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);
Route::get('terms',[App\Http\Controllers\GuestController::class, 'termsofuse']);
Route::get('privacy-policy',[App\Http\Controllers\GuestController::class, 'privacypolicy']);
Route::get('podiatry',[App\Http\Controllers\GuestController::class, 'podiatryassess']);
Route::get('pedicure',[App\Http\Controllers\GuestController::class, 'pedicuretreatment']);
Route::get('semelle',[App\Http\Controllers\GuestController::class, 'semelleortho']);
Route::get('about-aglae',[App\Http\Controllers\GuestController::class, 'aboutaglae']);
Route::get('diabetic-foot',[App\Http\Controllers\GuestController::class, 'df']);
Route::get('pedicure-medical-specificities',[App\Http\Controllers\GuestController::class, 'pms']);
Route::get('plantar-wart',[App\Http\Controllers\GuestController::class, 'plantarwart']);
Route::get('orthonyxies-onychoplasty',[App\Http\Controllers\GuestController::class, 'orthonyonycho']);
Route::get('podiatric-specificities',[App\Http\Controllers\GuestController::class, 'ps']);
Route::get('sports-podiatry',[App\Http\Controllers\GuestController::class, 'sportpodi']);
Route::get('posturology',[App\Http\Controllers\GuestController::class, 'Posturo']);


Route::get('/', function () {
    return view('mainpage');
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/calendar', [App\Http\Controllers\HomeController::class, 'calendar'])->name('calendar');
Route::get('/patient-list', [App\Http\Controllers\HomeController::class, 'patients'])->name('patient');

Route::post('/create-patient', [App\Http\Controllers\HomeController::class, 'createPatient'])->name('create.patient');

Route::get('/fetch-users', [HomeController::class, 'fetchUsers'])->name('fetch.users');



// Route to fetch user details by ID
Route::get('/get-user/{id}', [HomeController::class, 'getUser'])->name('get.user');

// Route to delete a user by ID
Route::delete('/delete-user/{id}', [HomeController::class, 'deleteUser'])->name('delete.user');

// Route to update user details by ID
Route::put('/update-user/{id}', [HomeController::class, 'updateUser'])->name('update.user');

Route::get('/user-details/{userId}', [App\Http\Controllers\HomeController::class, 'showUserDetails'])->name('user-details');

Route::post('/store-medical-history/{userId}', [App\Http\Controllers\HomeController::class, 'storeMedicalHistory'])->name('store-medical-history');

// Define a route to fetch medical history for a user
Route::get('/fetch-medical-history/{userId}', [App\Http\Controllers\HomeController::class, 'fetchMedicalHistory']);

//Fetch update and delete the patient Medical Histry
Route::get('/fetch-medical-history/{userId}/{historyId}', [App\Http\Controllers\HomeController::class, 'fetchSpecificMedicalHistory'])->name('fetch-specific-medical-history');
Route::put('/update-medical-history/{historyId}', [App\Http\Controllers\HomeController::class, 'updateMedicalHistory'])->name('update-medical-history');

Route::delete('/delete-medical-history/{historyId}', [App\Http\Controllers\HomeController::class, 'deleteMedicalHistory'])->name('delete-medical-history');

//Fetch the count Medical History
Route::get('/fetch-medical-history-count/{userId}', [App\Http\Controllers\HomeController::class, 'fetchMedicalHistoryCount']);


//Service view
Route::get('/service', [App\Http\Controllers\HomeController::class, 'Servicedetails'])->name('service');

// //CRUD  NAVIGATION 
Route::resource('services', ServiceController::class);
Route::get('services', [ServiceController::class, 'getData'])->name('services.getData');


Route::post('/user-details/{id}/store-consultation', [App\Http\Controllers\ConsultationController::class, 'store'])->name('user.consultation.store');
Route::get('/user-details/{id}/consultations', [App\Http\Controllers\ConsultationController::class, 'getUserConsultations'])->name('user.consultations.get');


// Route to fetch a single consultation by ID for editing
Route::get('/consultations/{id}', [App\Http\Controllers\ConsultationController::class, 'getConsultationById'])->name('consultations.get');

// Route to update a consultation
Route::put('/consultations/{id}/update', [App\Http\Controllers\ConsultationController::class, 'updateConsultation'])->name('consultations.update');

// Route to delete a consultation
Route::delete('/consultations/{id}/delete', [App\Http\Controllers\ConsultationController::class, 'deleteConsultation'])->name('consultations.delete');


// Route to get services
Route::get('/getServices', [App\Http\Controllers\HomeController::class, 'getServices'])->name('getServices');

// Route to get users
Route::get('/getUsers', [App\Http\Controllers\HomeController::class, 'getUsers'])->name('getUsers');


Route::resource('events', EventController::class);
// Route::get('/fetch-google-events', [App\Http\Controllers\EventController::class,'fetchGoogleCalendarEvents']);

// Route::get('/getEvents', [App\Http\Controllers\EventController::class, 'getEvents']);

// Route::get('/calendar/events', function () {
//     dd($e);
// });

Route::resource('booking', BookingController::class);
// Route::get('/events/{id}', [BookingController::class, 'getEventDetails']);

