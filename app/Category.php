<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'title', 'photo', 'parent_id'
    ];

    public function blog()
    {
        return $this->hasMany('App\Blog');
    }

    public function article()
    {
        return $this->hasMany('App\Article');
    }

    public function service()
    {
        return $this->hasMany('App\Service');
    }

    public function childs() 
    {
        return $this->hasMany('App\Category','parent_id','id') ;
    }
}
