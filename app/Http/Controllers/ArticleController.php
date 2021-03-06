<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Tag;

class ArticleController extends Controller
{

    public function index(){

        if(request('tag')){
            $articles = Tag::where('name',request('tag'))->firstOrFail()->articles;
        }else{
            $articles = Article::latest()->get();
        }
        return view('article.index',compact('articles'));
        // return view('article.index',compact('article')); same
    }

    public function show(Article $article){
        // $article = Article::findOrFail($id);
        // dd($article);
        return view('article.show',['articles'=> $article]);
    }

    public function create(){
        $tags = Tag::all();
        return view('article.create',compact('tags'));
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
    // dd(request()->all());

    // Article::create($this->validateArticle());

    // $article = new Article;
    // $article->title = request('title');
    // $article->except = request('except');
    // $article->body = request('body');
    // $article->save();

    $this->validateArticle();

    // $article = new Article($this->validateArticle());
    $article = new Article(request(['title','except','body']));
    $article->user_id = 1; //auth()->id()
    $article->save();

    // if(request()->has('tags')){
    //     $article->tags()->attach(request('tags'));
    // }

    $article->tags()->attach(request('tags'));

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
            'body'=>'required',
            'tags'=>'exists:tags,id' // The selected tags is invalid.
        ]);
    }

    // public function destroy($id){
    //     $article = Article::find($id);
    //     $article->delete();

    // }
}
