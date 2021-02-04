<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function show($id){
        $article = Article::find($id);

        return view('article.show',['articles'=> $article]);
    }
}
