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

Route::get('/', 'PagesController@home')->name('home');

Route::get('/about','PagesController@about' )->name('about');

Route::get('/contact', 'PagesController@contact')->name('contact');

Route::post('/contact', 'PagesController@store')->name('contact.store');

Route::get('/thanks/{name}', 'PagesController@thanks')->name('thanks');


/*non-named routes from miniproject 2- update later*/


Route::get('/messages', function () {
    return view('pages.messages');
})->name ('messages');
Route::get('/signup', function () {
    return view('pages.signup');
})->name ('signup');
Route::get('/login', function () {
    return view('pages.login');
})->name ('login');
Route::get('/messagedata', function () {
    return view('pages.messagedata');
})->name ('messagedata');


/*First way to echo data across pages-not as good but good to understand
 *
 * Route::post('/contact', function () {
   $data =request()->all();
    echo "Email: ". $data['email'] . '<br>';
    echo "Message: ". $data ['body'];
});*/
