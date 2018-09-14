<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() 
    {
    	return view('index-page');
    }

    public function blog() 
    {
    	return view('blog-page');
    }
    
    public function blog_item() 
    {
        return view('blog-item-page');
    }

    public function contacts() 
    {
    	return view('contacts-page');
    }
}
