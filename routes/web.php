<?php

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

// route pak puji
	Route::get('/', function () {
	    return view('welcome'); //index & welcome adalah tampilan di browser
	});

	// route
	Route::get('/about', function () {
		$nama = "Bayu Skak";
	    return view('about', ['nama' => $nama]);
	});
// akhir route pak puji

	// route fjr
		// Route::get('/', 'App\Http\Controllers\PagesController@home');
		// Route::get('/about', 'App\Http\Controllers\PagesController@about');
	// akhir route fjr

  // students sebelum diringkas	
// Route::get('/students', 'App\Http\Controllers\StudentsController@index');
// Route::get('/students/create', 'App\Http\Controllers\StudentsController@create');
// Route::get('/students/{student}', 'App\Http\Controllers\StudentsController@show');
// Route::post('/students', 'App\Http\Controllers\StudentsController@store');
// Route::delete('/students/{student}', 'App\Http\Controllers\StudentsController@destroy');
// Route::get('/students/{student}/edit', 'App\Http\Controllers\StudentsController@edit');
// Route::patch('/students/{student}', 'App\Http\Controllers\StudentsController@update');

		// mahasiswa
		// 	Route::get('/mahasiswa', 'App\Http\Controllers\MahasiswaController@index');
		
		// // students
		// 	Route::resource('students', 'App\Http\Controllers\StudentsController');
  		
  // 		// dosen
		// 	Route::get('/dosen', 'App\Http\Controllers\DosenController@index');

		// // karyawan
		// 	Route::get('/karyawan', 'App\Http\Controllers\KaryawanController@index');

		// // friends
		// 	Route::get('/friend', 'App\Http\Controllers\FriendController@index');

		// // movies
		// 	Route::get('/movie', 'App\Http\Controllers\MovieController@index');

			// // route bilangan ganjil & genap pak puji
			// Route::get('/bilangan/{number}', function($number){
			// 	if ($number % 4 == 2){
			// 		echo $number . ' ini bilangan genap ya';
			// 	} else{
			// 		echo $number . ' kalau ini bilangan ganjil';
			// 	}
			// });


 // "/about untuk menuju halaman about"
 // about adalah tampilan di browser
 // line 30, @index adalah properti bawaan laravel untuk menmpilkan seluruh data mahasiswa