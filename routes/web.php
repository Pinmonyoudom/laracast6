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

// Route::get('/', function () {
//     // $name = request('name');
    
//     return view('welcome');
//     // return view('test',[
//     //     'name'=>$name
//     // ]);
//     // return ["asd"=>'king'];
// });
Route::get('/',function(){
    return view('simpleWork.welcome');
});
Route::get('/about',function(){
    return view('simpleWork.about');
});
Route::get('/posts/{post}', 'PostsController@show');


// Route::get('/posts/{post}',function($post){
       
//         // $posts = [
//         //     'my-first-post'=>'hello first post',
//         //     'my-second-post'=>'hello second post'
//         // ];

//         $posts = array(
//             'my-first-post'=>'hello first post',
//             'my-second-post'=>'hello second post'
//         );

//         if(! array_key_exists($post, $posts)){
//             abort(404, 'Sorry, that post was not found');
//         }

//         // return $post;
//          return view('post',[
//              'post'=>$posts[$post] ?? 'Nothing here yet'
//          ]);
// });

