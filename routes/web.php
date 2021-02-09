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

// Route::get('/test', function () {
//     // $name = request('name');
    
//     // // return view('welcome');
//     // return view('test',[
//     //     'name'=>$name
//     // ]);
//     $names='<h1>KKA</h1>';
//     return view('test',compact('names'));
//     // return ["asd"=>'king'];
// });
Route::get('/',function(){
    return view('simpleWork.welcome');
});
// Route::get('/about',function(){
//     // $article = App\Article::all();
//     // $article = App\Article::take('2')->get();
//     // $article = App\Article::paginate(3);
//     $article = App\Article::latest()->get(); //order by descending (z -> a)
//     return $article;
//     return view('simpleWork.about');
// });
Route::get('/about',function(){
    return view('simpleWork.about',[
        'articles'=> App\Article::take(3)->latest()->get() //this is inline
    ]);
});
// Route::get('/posts/{post}', 'PostsController@show');
Route::get('/articles','ArticleController@index')->name('articles.index');
Route::get('/articles/create','ArticleController@create');
Route::post('articles/store','ArticleController@store');
Route::get('articles/{article}/edit','ArticleController@edit');
Route::put('articles/{article}','ArticleController@update');
Route::get('/articles/{article}','ArticleController@show')->name('articles.show');
// Route::get('/articles/{id}','ArticleController@destroy');


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

