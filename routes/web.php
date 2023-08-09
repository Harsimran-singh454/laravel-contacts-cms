<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ContactsController;

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


/**
 *  *********** USER ROUTES
 */

Route::get('/',[UsersController::class,'login'])->name('login');
Route::any('/logging',[UsersController::class,'login_logic'])->name('login_logic');
Route::get('/register',[UsersController::class,'register'])->name('register');
Route::any('/registering',[UsersController::class,'register_logic'])->name('register_logic');
Route::get('/admindashboard',[UsersController::class,'dashboard'])->name('dashboard');
Route::any('/logout',[UsersController::class,'logout'])->name('logout');

Route::get('/edituser/{id}',[UsersController::class,'editForm'])->name('edit_user_form');
Route::any('/edituserprocess/{id}',[UsersController::class,'edit'])->name('edit_user');
Route::get('/deleteuserPage/{id}',[UsersController::class,'deletePage'])->name('user_delete_page');
Route::any('/deleteuser/{id}',[UsersController::class,'delete'])->name('delete_user');




/**
 * ************ CONTACTS ROUTES
 */

Route::get('/newContact',[ContactsController::class,'newContactForm'])->name('new_contact');
Route::any('/addingContact',[ContactsController::class,'createContact'])->name('create_contact');
Route::get('/contactsList',[ContactsController::class,'contactslist'])->name('contact_list');
Route::get('/editcontact/{id}',[ContactsController::class,'editForm'])->name('edit_contact_form');
Route::any('/editprocess/{id}',[ContactsController::class,'edit'])->name('edit_contact');
Route::get('/deleteContactPage/{id}',[ContactsController::class,'deletePage'])->name('contact_delete_page');
Route::any('/deleteContact/{id}',[ContactsController::class,'delete'])->name('delete_contact');
