<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // protected $fillable = ['title','except','body'];
    protected $guarded = [];
    //same

    public function path(){
        return route('articles.show',$this);
    }
    //For linking to specific resources(show article)
}
