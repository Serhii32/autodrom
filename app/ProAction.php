<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProAction extends Model
{
    protected $fillable = [
        'title', 'main_photo', 'short_description', 'description', 'titleSEO', 'descriptionSEO', 'keywordsSEO'
    ];
}
