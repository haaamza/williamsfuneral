<?php

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

Route::get('/about',function(){
  return view('pages.about');
})->name('about');

Route::get('/contact',function(){
  return view('pages.contact');
})->name('contact');

Route::get('/createAlbum',function(){
  return view('pages.createAlbums');
})->name('albums');

Route::get('/directBurial',function(){
  return view('pages.directBurial');
})->name('directBurial');

Route::get('/directCermation',function(){
  return view('pages.directCermation');
})->name('directCermation');

Route::get('/error',function(){
  return view('pages.error');
})->name('error');

Route::get('/faqs',function(){
  return view('pages.faqs');
})->name('faqs');

Route::get('/griefResources',function(){
  return view('pages.griefResources');
})->name('griefResources');

Route::get('/history',function(){
  return view('pages.history');
})->name('history');

Route::get('/home',function(){
  return view('pages.home');
})->name('home');

Route::get('/links',function(){
  return view('pages.links');
})->name('links');

// Route::get('/locationInformation',function(){
//   return view('pages.locationInfo');
// })->name('locationInfo');

Route::get('/location',function(){
  return view('pages.location');
})->name('location');

Route::get('/perPlan',function(){
  return view('pages.prePlan');
})->name('prePlan');

Route::get('/prePlaning',function(){
  return view('pages.prePlaning');
})->name('prePlaning');

Route::get('/services',function(){
  return view('pages.services');
})->name('services');

Route::get('/socialSecurity',function(){
  return view('pages.socialSecurity');
})->name('socialSecurity');

Route::get('/staffHistory',function(){
  return view('pages.staff');
})->name('staffHistory');

Route::get('/traditionalFuneral',function(){
  return view('pages.traditionalFuneral');
})->name('traditionalFuneral');

Route::get('/veterans',function(){
  return view('pages.veterans');
})->name('veterans');

//obituraies
Route::get('/merchandise',function(){
  return view('pages.merch');
})->name('merch');

Route::get('/obituraies',function(){
  return view('obituaries.list');
})->name('obituaries-list');

//florist
Route::get('/sendFlowers',function(){
  return view('florist.list');
})->name('florist-list');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
//admin Routes

Route::get('/admin/dashboard',function(){
  return view('auth.dashboard');
});

Route::get('/admin/obituries/add',function(){
  return view('auth.obituries.add');
});

Route::get('/admin/obituries/edit',function(){
  return view('auth.obituries.edit');
});
