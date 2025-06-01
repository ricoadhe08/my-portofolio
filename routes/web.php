<?php

use App\Http\Controllers\PageController;
use App\Livewire\About;
use App\Livewire\Contacts;
use App\Livewire\Home;
use App\Livewire\Projects;
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

Route::get('/', Home::class);
// Route::get('/about', About::class)->name('about');
// Route::get('/projects', Projects::class)->name('projects');
// Route::get('/contacts', Contacts::class)->name('contacts');


