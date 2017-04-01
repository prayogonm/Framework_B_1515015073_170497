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

//Route::get('/', function () {
  //  return view('welcome');

//});
//
//
//

Route::get('/cobamodel', function()
{ 
	    $anggota = App\Anggota::all()->first(); 
    echo $anggota->nama;
    
  echo $anggota->alamat;
    });


//menggunakan Where
Route::get('/cobamodel1', function() 
{ 
    $anggota = App\Anggota::where('nama', '=', 'mawar')->first(); 
 echo $anggota->id.' '; 
 echo $anggota->nama; 
}); 

//menampilkan semua record
Route::get('/cobamodel2', function()  
{ 
    $anggota = App\Anggota::all(); 
 
    foreach($anggota as $list) 
    { 
       echo $list->nama; 
       echo $list->alamat; 
    }  
});

//menambah data
Route::get('/cobamodel3', function() 
{ 
    $anggota = new App\Anggota;   
    $anggota->nama = 'Taylor Otwell'; 
    $anggota->alamat = 'Avenue park 12'; 
    $anggota->save();     
});

//mengupdate data
Route::get('/cobamodel4', function() 
{ 
    $anggota = App\Anggota::find(4); //Temukan anggota dengan id = 4 
    $anggota->nama = 'John Doe'; 
    $anggota->alamat = 'Silicon Valey'; 
    $anggota->save();     
});

//menghapus data
Route::get('/cobamodel5', function() 
{ 
    $anggota = App\Anggota::find(1); //Temukan anggota dengan id = 1 
    $anggota->delete(); 

});

Route::get('/relasi', function() { 
//Temukan anggota yang bernama jati
$anggota = App\Anggota::where('nama', '=', 'jati')->first(); 
echo $anggota->nama .' '.'hobinya :'; 
# Tampilkan seluruh data hobinya 

 foreach ($anggota->hobi as $list) 
echo '<li> ' . $list->hobi ; 
});

// views
Route::get('/halamanku', function() 
{ 
return View::make('halamanku'); 
});

Route::get('/bladesample', function(){

    return View::make('bladesample'); 

}); 

Route::get('blade', function () {
    return view('child');
});

//route::controllers([
    //'auth' => 'Auth\Authcontroller,'
    //'password' => 'Auth\Passwordcontroller,'
    //]);

Route::resource('anggota','Anggotacontroller');
Route::resource('anggota.hobi','Hobicontroller');

Route::get('posts', 'postcontroller@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
