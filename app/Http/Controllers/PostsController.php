<?php

namespace App\Http\Controllers;
use DB;
use App\Posts;

class PostsController{

    public function show($slug){

        // $post = DB::table('posts')->where('slug',$slug)->first();
        // dd($post);
        // This use Query Builder
        // check there has info in database  or not

        $post = Posts::where('slug',$slug)->firstOrFail();
        // This use Eloquent with model Posts
        //firstOrFail it similar to below ... if(! $post) 
        // if (! $post){
        //     abort('404');
        // }
         return view('post',[
            //  'post'=>Posts::where('slug',$slug)->firstOrFail()
            //  This is inline variable
            'post'=>$post
         ]);


    }
}
