<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Feedback;
use App\Article;
use App\Blog;
use App\Category;
use App\ProAction;

class PageController extends Controller
{

    private $serviceItems;
    private $serviceTitles;
    private $blogCategories;
    private $blogTitlesCategories;
    private $blogItems;

    public function __construct()
    {
        $this->serviceItems = Service::all();
        $this->serviceTitles = $this->serviceItems->map(function ($serviceTitle) {
            return $serviceTitle->only(['id','title']);
        });
        $this->blogCategories = Category::all();
        $this->blogTitlesCategories = $this->blogCategories->map(function ($blogTitleCategory) {
            return $blogTitleCategory->only(['id','title']);
        });
        $this->blogItems = Blog::orderBy('created_at', 'desc')->take(5)->get();
    }

    public function index()
    {
        $feedbackItems = Feedback::orderBy('created_at', 'desc')->get();
        $pageTitle = 'Чип-тюнинг двигателя | Главная';
        $pageDescription = 'Чип тюнинг автомобиля';
        $frontServiceItems = Service::orderBy('created_at', 'desc')->get()->take(6);
        $actionItems = ProAction::orderBy('created_at', 'desc')->get()->take(6);
        $blogItems = Blog::orderBy('created_at', 'desc')->get()->take(6);
    	return view('index-page', compact('feedbackItems', 'actionItems', 'blogItems', 'frontServiceItems', 'pageTitle', 'pageDescription'), ['serviceItems' => $this->serviceItems, 'serviceTitles' => $this->serviceTitles, 'blogTitlesCategories' => $this->blogTitlesCategories]);
    }

    public function blog()
    {
        $identificator = 'blog';
        $pageTitle = 'Чип-тюнинг двигателя | Новости';
        $pageDescription = 'Новые события и акции компании Чип-тюнинг. Увеличение мощности двигателя с гарантией, качественно в виннице';
        $pageKeywords = 'новости, акции, события, чип-тюнинг, увеличение мощности, тюнинг двигателя, Винница, Bosch сервис';
        $items = Blog::paginate(6);
    	return view('items-page', compact(['items', 'identificator', 'pageTitle', 'pageDescription', 'pageKeywords']), ['serviceTitles' => $this->serviceTitles, 'blogItems' => $this->blogItems, 'blogTitlesCategories' => $this->blogTitlesCategories]);
    }

    public function service()
    {
        $identificator = 'service';
        $items = Service::paginate(6);
        return view('items-page', compact(['items', 'identificator']), ['serviceTitles' => $this->serviceTitles, 'blogItems' => $this->blogItems, 'blogTitlesCategories' => $this->blogTitlesCategories]);
    }

    public function proAction()
    {
        $identificator = 'pro-action';
        $items = ProAction::paginate(6);
        return view('items-page', compact(['items', 'identificator']), ['serviceTitles' => $this->serviceTitles, 'blogItems' => $this->blogItems, 'blogTitlesCategories' => $this->blogTitlesCategories]);
    }

    public function article()
    {
        $identificator = 'article';
        $pageTitle = 'Чип-тюнинг двигателя | Cтатьи';
        $pageDescription = 'Статьи - полезная и интересная информация по увеличению мощности двигателя';
        $pageKeywords = 'chiptuning, статьи, увеличить мощность двигателя, винница, бош сервис';
        $items = Article::paginate(6);
        return view('items-page', compact(['items', 'identificator', 'pageTitle', 'pageDescription', 'pageKeywords']), ['serviceTitles' => $this->serviceTitles, 'blogItems' => $this->blogItems, 'blogTitlesCategories' => $this->blogTitlesCategories]);
    }

    public function feedback()
    {
        $identificator = 'feedback';
        $items = Feedback::paginate(6);
        return view('items-page', compact(['items', 'identificator']), ['serviceTitles' => $this->serviceTitles, 'blogItems' => $this->blogItems, 'blogTitlesCategories' => $this->blogTitlesCategories]);
    }

    public function category_item(int $id)
    {
        $identificator = 'blog';
        $category = Category::findOrFail($id);
        $pageTitle = $category->titleSEO;
        $pageDescription = $category->descriptionSEO;
        $pageKeywords = $category->keywordsSEO;
        $items = $category->blog()->paginate(6);
        $childs = $category->childs()->get();
        return view('items-page', compact(['items', 'childs', 'identificator', 'pageTitle', 'pageDescription', 'pageKeywords']), ['serviceTitles' => $this->serviceTitles, 'blogItems' => $this->blogItems, 'blogTitlesCategories' => $this->blogTitlesCategories]);
    }

    public function blog_item(int $id)
    {
        $item = Blog::findOrFail($id);
        $pageTitle = $item->titleSEO;
        $pageDescription = $item->descriptionSEO;
        $pageKeywords = $item->keywordsSEO;
        return view('item-page', compact(['item', 'pageTitle', 'pageDescription', 'pageKeywords']), ['serviceTitles' => $this->serviceTitles, 'blogItems' => $this->blogItems, 'blogTitlesCategories' => $this->blogTitlesCategories]);
    }

    public function service_item(int $id)
    {
        $item = Service::findOrFail($id);
        $pageTitle = $item->titleSEO;
        $pageDescription = $item->descriptionSEO;
        $pageKeywords = $item->keywordsSEO;
        return view('item-page', compact(['item', 'pageTitle', 'pageDescription', 'pageKeywords']), ['serviceTitles' => $this->serviceTitles, 'blogItems' => $this->blogItems, 'blogTitlesCategories' => $this->blogTitlesCategories]);
    }

    public function proAction_item(int $id)
    {
        $item = ProAction::findOrFail($id);
        $pageTitle = $item->titleSEO;
        $pageDescription = $item->descriptionSEO;
        $pageKeywords = $item->keywordsSEO;
        return view('item-page', compact(['item', 'pageTitle', 'pageDescription', 'pageKeywords']), ['serviceTitles' => $this->serviceTitles, 'blogItems' => $this->blogItems, 'blogTitlesCategories' => $this->blogTitlesCategories]);
    }

    public function article_item(int $id)
    {
        $item = Article::findOrFail($id);
        $pageTitle = $item->titleSEO;
        $pageDescription = $item->descriptionSEO;
        $pageKeywords = $item->keywordsSEO;
        return view('item-page', compact(['item', 'pageTitle', 'pageDescription', 'pageKeywords']), ['serviceTitles' => $this->serviceTitles, 'blogItems' => $this->blogItems, 'blogTitlesCategories' => $this->blogTitlesCategories]);
    }

    public function feedback_item(int $id)
    {
        $item = Feedback::findOrFail($id);
        $pageTitle = $item->titleSEO;
        $pageDescription = $item->descriptionSEO;
        $pageKeywords = $item->keywordsSEO;
        return view('item-page', compact(['item', 'pageTitle', 'pageDescription', 'pageKeywords']), ['serviceTitles' => $this->serviceTitles, 'blogItems' => $this->blogItems, 'blogTitlesCategories' => $this->blogTitlesCategories]);
    }

    public function contacts()
    {
        $pageTitle = 'Чип-тюнинг двигателя | Контакты';
        $pageDescription = 'Контактная информация Чип-тюнинг от автодром, Bosch сервис';
        $pageKeywords = 'Контакты, адрес, телефон, Bosch сервис, Винница, чип-тюнинг';
    	return view('contacts-page', compact(['pageTitle', 'pageDescription', 'pageKeywords']), ['serviceTitles' => $this->serviceTitles, 'blogItems' => $this->blogItems, 'blogTitlesCategories' => $this->blogTitlesCategories]);
    }
}