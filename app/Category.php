<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'title', 'photo', 'parent_id', 'titleSEO', 'descriptionSEO', 'keywordsSEO'
    ];

    public function blog()
    {
        return $this->hasMany('App\Blog');
    }

    public function childs() 
    {
        return $this->hasMany('App\Category','parent_id','id') ;
    }
}
