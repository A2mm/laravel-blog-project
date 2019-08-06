<?php


/*******       start user interface section       *******/
Route::get('/', 'FrontController@index');
Route::get('view/post/{id}', 'FrontController@view_post');
Route::get('view/post/by/category/{id}', 'FrontController@view_post_by_category');
/*******       end user interface section       *******/

/* ____________________________________________________________________________ */ 


/*******      start admin section     *******/
Route::get('admin/login', 'AdminController@admin_login_form');
Route::post('admin/credentials', 'AdminController@store_admin');
Route::get('admin/dashboard', 'AdminController@admin_dashboard');
Route::get('admin/logout', 'AdminController@admin_logout');
Route::get('admin/blog', 'AdminController@admin_blog');
Route::get('admin/profile', 'AdminController@admin_profile');
/*******     end admin section     *******/


/* ____________________________________________________________________________ */ 


/*******       start posts section       *******/
Route::get('posts', 'PostController@index');
Route::get('add/new/post', 'PostController@add_new_post');
Route::post('store/post', 'PostController@storing_post');
Route::get('view/postdetails/{id}', 'PostController@view_post_details');
Route::get('post/actions', 'PostController@posts_actions');
Route::get('post/editing/{id}', 'PostController@editing_post');
Route::post('update/post', 'PostController@updating_post');
Route::get('post/temp/deleting', 'PostController@temp_deleting')->name('post.temp_deleting');
Route::post('/post/temp/deleting', 'PostController@post_temp_deleting');
Route::get('post/perm/deleting', 'PostController@perm_deleting')->name('post.perm_deleting');
Route::post('post/perm/deleting', 'PostController@post_perm_deleting');
Route::get('posts/by/category/{id}', 'PostController@posts_by_category');
Route::get('trashed/posts', 'PostController@trashed_posts');
Route::get('restore/post/{id}', 'PostController@restore_post');
/*******       end posts section       *******/


/* ____________________________________________________________________________ */ 


/*******       start categories section       *******/
Route::get('categories', 'CategoryController@index');
Route::get('add/new/category', 'CategoryController@add_new_category');
Route::post('store/category', 'CategoryController@storing_category');
Route::get('view/category/{id}', 'CategoryController@view_category');
Route::get('category/actions', 'CategoryController@categories_actions');
Route::get('category/editing/{id}', 'CategoryController@editing_category');
Route::post('updating/category', 'CategoryController@updating_category');
Route::get('category/temp/deleting', 'CategoryController@temp_deleting')->name('category.temp_deleting');
Route::post('category/temp/deleting', 'CategoryController@temp_deleting_category');
Route::get('category/perm/deleting', 'CategoryController@perm_deleting')->name('category.perm_deleting');
Route::post('/category/perm/deleting', 'CategoryController@perm_deleting_category');
Route::get('trashed/categories', 'CategoryController@trashed_categories');
Route::get('restore/category/{id}', 'CategoryController@restore_category');
/*******       end categories section       *******/
