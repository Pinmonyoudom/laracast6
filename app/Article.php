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

    public function author(){

        return $this->belongsTo(User::class,'user_id'); 
        //if use public function author must include user_id in return BUT if use  public function user no
    }
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

}
