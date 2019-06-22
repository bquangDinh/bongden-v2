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

Route::get('/','HomePageController@index')->name('homepage');
Route::get('/article','ArticleController@articles');

Route::get('/about_us', function () {
    return view('about_us');
});

Route::get('/articles', function () {
    return view('article');
});

Route::get('/reading', function () {
    return view('reading');
});


Route::get('bongden_login','BongdenLoginController@index')->name('bongden_login_show_form')->middleware('isloginbefore');
Route::post('bongden_login','BongdenLoginController@login')->name('bongden_login');
Route::post('bongden_register','BongdenRegisterController@register')->name('bongden_register');
Route::get('bongden_logout','AuthSession@destroy')->name('bongden_logout');

Route::group(['prefix' => 'user','middleware' => 'checklogin'],function(){
  Route::get('/','UserController@index')->name('user_dashboard');

  Route::get('action/get_tags_list','TagController@getTagsBySearching');
  Route::get('action/get_subjects','SubjectController@getAllSubjects');

  Route::prefix('special_action')->group(function(){
    Route::get('/{permission}','UserController@getPageByPermission')->middleware('checkpermission');
    Route::get('/approve_article/approve/{article_id}','ArticleController@approveArticleByID');
    Route::post('/approve_article/delete','ArticleController@deleteArticleByID');
    Route::get('/approve_article/restore/{article_id}','ArticleController@restoreArticleByID');
    Route::get('/approve_article/preview/{article_id}','ArticleController@getArticleByID');
  });

  Route::prefix('article')->group(function(){
    Route::get('/new','ArticleController@new');
    Route::delete('/delete','ArticleController@delete');
    Route::get('/admin_deleled_info/{article_id}','ArticleController@getAdminDeletedInfo');
    Route::get('/list','ArticleController@getArticleList');
    Route::post('/create','ArticleController@create')->name('create_article');
    Route::get('/rules','ArticleController@showrule');
    Route::get('/review/{article_id}','ArticleController@getArticleByID');
  });
});


Route::get('/home', 'HomeController@index')->name('home');
