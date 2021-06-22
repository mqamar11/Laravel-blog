<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/test', function(){

    return App\Profile::find(1)->user;
});










Route::get('/', function () {
    return view('welcome');
});

Auth::routes();



Route::group(['prefix' => 'admin', 'middleware' => 'auth'] ,function(){

Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/post/create', [

    'uses' => 'PostController@create',
    'as' => 'post.create'

]);

Route::post('/post/store', [

    'uses' => 'PostController@store',
    'as' => 'post.store'

]);

Route::get('/post', [

    'uses' => 'PostController@index',
    'as' => 'post.list'

]);

Route::get('/post/trashed', [

    'uses' => 'PostController@trashed',
    'as' => 'post.trash'

]);

Route::get('/post/kill/{id}', [

    'uses' => 'PostController@kill',
    'as' => 'post.kill'

]);


Route::get('/post/restore/{id}', [

    'uses' => 'PostController@restore',
    'as' => 'post.restore'

]);

Route::get('/post/edit/{id}', [

    'uses' => 'PostController@edit',
    'as' => 'post.edit'

]);

Route::post('/post/update/{id}', [

    'uses' => 'PostController@update',
    'as' => 'post.update'

]);

Route::get('/post/delete/{id}', [

    'uses' => 'PostController@destroy',
    'as' => 'post.delete'

]);

Route::get('/category/create', [

    'uses' => 'CategoryController@create',
    'as' => 'category.create'

 ]);

 Route::post('/category/store', [

    'uses' => 'CategoryController@store',
    'as' => 'category.store'
 ]);

 Route::get('/category/list', [

    'uses' => 'CategoryController@index',
    'as' => 'category.list'

 ]);

 Route::get('/category/edit/{id}', [

    'uses' => 'CategoryController@edit',
    'as' => 'category.edit'

 ]);

 Route::put('/category/edit/{id}', [

    'uses' => 'CategoryController@update',
    'as' => 'category.update'

 ]);




 Route::get('/category/delete/{id}', [

    'uses' => 'CategoryController@destroy',
    'as' => 'category.delete'

 ]);

 Route::get('/tag', [

    'uses' => 'TagController@index',
    'as' => 'tag.list'

 ]);

 Route::get('/tag/create', [

    'uses' => 'TagController@create',
    'as' => 'tag.create'

 ]);

 Route::post('/tag/store', [

    'uses' => 'TagController@store',
    'as' => 'tag.store'

 ]);

 Route::get('/tag/edit/{id}', [

    'uses' => 'TagController@edit',
    'as' => 'tag.edit'

 ]);

 Route::get('/tag/update/{id}', [

    'uses' => 'TagController@update',
    'as' => 'tag.update'

 ]);

 Route::post('/tag/update/{id}', [

    'uses' => 'TagController@update',
    'as' => 'tag.update'

 ]);

 Route::get('/tag/delete/{id}', [

    'uses' => 'TagController@destroy',
    'as' => 'tag.delete'

 ]);

 Route::get('/user', [

    'uses' => 'UserController@index',
    'as' => 'user.list'

 ]);

 Route::get('/user/create', [

    'uses' => 'UserController@create',
    'as' => 'user.create'

 ]);

 Route::post('/user/store', [

    'uses' => 'UserController@store',
    'as' => 'user.store'

 ]);

 Route::get('/user/admin/{id}', [

    'uses' => 'UserController@admin',
    'as' => 'user.admin'

 ]);

 Route::get('/user/notAdmin/{id}', [

    'uses' => 'UserController@notAdmin',
    'as' => 'user.notAdmin'

 ]);

 Route::get('/user/profile', [

    'uses' => 'ProfileController@index',
    'as' => 'user.profile'

 ]);


 Route::post('/user/profile/update', [

    'uses' => 'ProfileController@update',
    'as' => 'user.profile.update'

 ]);


 Route::get('/user/delete/{id}', [

    'uses' => 'UserController@destroy',
    'as' => 'user.delete'

 ]);

 Route::get('settings', 'SettingController@index')->name('setting');

 Route::put('settings/update', 'SettingController@update')->name('setting.update');

});
