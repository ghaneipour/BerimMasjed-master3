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
//localhost:8000
Route::get('/', function () {
    return view('welcome');
});


//localhost:8000/post
Route::get('/post1', 'PostControllers@MyPostVoid');

//localhost:8000/post
Route::get('/post2', 'UserControllers@MyUserVoid');

//localhost:8000/support
Route::get('support',function(){
    return 'supportco is Ok';
});

//localhost:8000/poster
Route::get('/poster',function(){
    return view('admin.index');
});

//localhost:8000/index/id/post 
Route::get('/indexy/{id}/{post}',['as'=>'myfunc',function($post,$id){
    return view('index');
}])->where(['post'=>'[A-Za-z]+','id'=>'[0-9]+']);