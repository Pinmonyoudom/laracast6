<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function articles(){
        return $this->belongsToMany(Article::class);
    }
    ///Doing the inverse
    ///If we have a tag instead and want fetch all article that association with this tag once again a 
    //tag belongto and can have many article
}
