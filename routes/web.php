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
    $datas = array(
        'services' => App\Service::all(),
        'portfolios' => App\Portfolio::all(),
        'portfolio_categories' => DB::table('portfolios')->select('category')->distinct()->get(),
        'clients' => App\Client::all()
    );
    return view('home', $datas);
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
