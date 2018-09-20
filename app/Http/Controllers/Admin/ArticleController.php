<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use App\Category;
use App\Http\Requests\StoreBlogArticleServiceRequest;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $identificator;

    public function __construct() 
    {
        $this->identificator = 'article';
    }

    public function index()
    {
        $items = Article::paginate(12);
        return view('admin.blog_article_service.index', compact(['items']), ['identificator' => $this->identificator]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('title','id')->all();
        return view('admin.blog_article_service.create', compact(['categories']), ['identificator' => $this->identificator]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogArticleServiceRequest $request)
    {
        $item = new Article();
        $item->title = $request->title;
        $item->description = $request->description;
        $item->category_id = $request->category;
        $item->save();
        $last_insereted_id = $item->id;
        if ($request->main_photo != null) {
            $item->main_photo = $request->main_photo->store('img/site/article/' . $last_insereted_id);
            $item->save();
        }
        return redirect()->route('admin/article.index')->with(['message' => 'Стаття додана успішно']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $item = Article::findOrFail($id);
        return view('admin.blog_article_service.show', compact(['item']), ['identificator' => $this->identificator]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $categories = Category::pluck('title','id')->all();
        $item = Article::findOrFail($id);
        return view('admin.blog_article_service.edit', compact(['item', 'categories']), ['identificator' => $this->identificator]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreBlogArticleServiceRequest $request, int $id)
    {
        $item = Article::findOrFail($id);
        $item->title = $request->title;
        $item->description = $request->description;
        $item->category_id = $request->category;
        $item->save();
        $last_insereted_id = $item->id;

        if ($request->main_photo != null) {

            if($item->main_photo) {
                Storage::disk('local')->delete($item->main_photo);
            }

            $item->main_photo = $request->main_photo->store('img/site/article/' . $last_insereted_id);
            $item->save();
        }

        return redirect()->route('admin/article.index')->with(['message' => 'Стаття успішно оновлена']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        Storage::disk('local')->deleteDirectory('img/site/article/' . $id);
        $item = Article::findOrFail($id);
        $item->delete();
        return redirect()->route('admin/article.index')->with(['message' => 'Стаття успішно видалена']);
    }
}
