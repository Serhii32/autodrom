<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Feedback;
use App\Article;
use App\Blog;
use App\Category;

class PageController extends Controller
{

    private $serviceItems;
    private $serviceTitles;

    public function __construct()
    {
        $this->serviceItems = Service::all();
        $this->serviceTitles = $this->serviceItems->map(function ($serviceTitle) {
            return $serviceTitle->only(['id','title']);
        });
    }

    public function index() 
    {
        $feedbackItems = Feedback::all();
    	return view('index-page', compact('feedbackItems'), ['serviceItems' => $this->serviceItems, 'serviceTitles' => $this->serviceTitles]);
    }

    public function blog() 
    {
        $identificator = 'blog';
        $items = Blog::paginate(6);
    	return view('items-page', compact(['items', 'identificator']), ['serviceTitles' => $this->serviceTitles]);
    }

    public function service() 
    {
        $identificator = 'service';
        $items = Service::paginate(6);
        return view('items-page', compact(['items', 'identificator']), ['serviceTitles' => $this->serviceTitles]);
    }

    public function article() 
    {
        $identificator = 'article';
        $items = Article::paginate(6);
        return view('items-page', compact(['items', 'identificator']), ['serviceTitles' => $this->serviceTitles]);
    }
    
    public function feedback()
    {
        $identificator = 'feedback';
        $items = Feedback::paginate(6);
        return view('items-page', compact(['items', 'identificator']), ['serviceTitles' => $this->serviceTitles]);
    }

    public function category_item(int $id) 
    {
        $identificator = 'blog';
        $category = Category::findOrFail($id);
        $items = $category->blog()->paginate(6);
        $childs = $category->childs()->get();
        return view('items-page', compact(['items', 'childs', 'identificator']), ['serviceTitles' => $this->serviceTitles]);
    }

    public function blog_item(int $id) 
    {
        $item = Blog::findOrFail($id);
        return view('item-page', compact(['item']), ['serviceTitles' => $this->serviceTitles]);
    }

    public function service_item(int $id) 
    {
        $item = Service::findOrFail($id);
        return view('item-page', compact(['item']), ['serviceTitles' => $this->serviceTitles]);
    }

    public function article_item(int $id) 
    {
        $item = Article::findOrFail($id);
        return view('item-page', compact(['item']), ['serviceTitles' => $this->serviceTitles]);
    }

    public function feedback_item(int $id) 
    {
        $item = Feedback::findOrFail($id);
        return view('item-page', compact(['item']), ['serviceTitles' => $this->serviceTitles]);
    }

    public function contacts() 
    {
    	return view('contacts-page', ['serviceTitles' => $this->serviceTitles]);
    }
}
