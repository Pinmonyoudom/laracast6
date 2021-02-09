<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{

    public function index(){
        $article = Article::latest()->get();
        // dd($article);
        return view('article.index',['articles'=>$article]);
        // return view('article.index',compact('article')); same
    }

    public function show(Article $article){
        // $article = Article::findOrFail($id);
        // dd($article);
        return view('article.show',['articles'=> $article]);
    }

    public function create(){
        
        return view('article.create');
    }

    public function store(){
    //    dump(request()->all());
    // request()->validate([
    //     'title'=> 'required',
    //     'except'=> 'required',
    //     'body'=> 'required'
    // ]);
    // Article::create([
    //     'title'=>request('title'),
    //     'except'=>request('except'),
    //     'body'=>request('body')
    // ]);

    //inlineVariable
    // Article::create(request()->validate([
    //     'title'=>'required',
    //     'except'=>'required',
    //     'body'=>'required'
    // ]));
    //Extract Method
    Article::create($this->validateArticle());
    // $article = new Article;
    // $article->title = request('title');
    // $article->except = request('except');
    // $article->body = request('body');
    // $article->save();

    return redirect(route('articles.index'));
       
    }

    public function edit(Article $article){
        // $article = Article::find($id);
       return view('article.edit',compact('article'));
    }

    public function update(Article $article){
        // $article = Article::find($id);
        // $article->title = request('title');
        // $article->except = request('except');
        // $article->body = request('body');
        // $article->save();
    //   $article->update(request()->validate([
    //         'title'=>'required',
    //         'except'=>'required',
    //         'body'=>'required'
    //     ]));
    //Extract Method
    $article->update($this->validateArticle());

        return redirect(route('articles.show',$article));
        //same
        // return redirect($article->path()); 
    }

    protected function validateArticle(){
        
        return request()->validate([
            'title'=>'required',
            'except'=>'required',
            'body'=>'required'
        ]);
    }

    // public function destroy($id){
    //     $article = Article::find($id);
    //     $article->delete();

    // }
}
