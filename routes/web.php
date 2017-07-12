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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*Route::get('csv', function()
{
    if (($handle = fopen(public_path() .. '/biztypes.csv','r')) !== FALSE)
    {
        while (($data = fgetcsv($handle, 1000, ',')) !==FALSE)
        {
            $biztypes = new biztype();
            $biztypes->id = $data[0];
            $biztypes->biztype = $data[1];
            $biztypes->save();
        }
        fclose($handle);
    }

    return biztype::all();
});*/


Route::prefix('admin')->group(function () {

    Route::get('', function(){
        return view('adminLTE/admin_template');
    });

    Route::get('dashboard', 'DashboardController@index');


});
