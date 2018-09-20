<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class PageController extends Controller
{
    public function index() 
    {
        $serviceItems = Service::all();
    	return view('index-page', compact(['serviceItems']));
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
