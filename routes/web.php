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


Route::get('/', 'Frontend\PagesController@home');

Route::get('/fotografie', 'Frontend\PagesController@fotografie');

Route::get('/webdesign', 'Frontend\PagesController@webdesign');

Route::get('/over', 'Frontend\PagesController@over');

Route::get('/contact', 'Frontend\PagesController@contact');

Route::post('/contact', 'Frontend\PagesController@getcontact');

Route::get('/webdesign/{id}', 'Frontend\PagesController@project');

Route::bind('id', function($value, $route)
{
    return App\ProjectView::where('project_name', $value)->firstOrFail();
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});



Route::get('/cache',  function ()
{
   
      
    
      
      Artisan::call('voyager:admin yarnobachmann@gmail.com');
      echo 'done migrate:install';
      
     
  
    
     
     
    

});
