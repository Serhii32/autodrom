<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Blog;
// use App\Article;
// use App\Service;
use App\Http\Requests\StoreCategoryRequest;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parentCategories = Category::where('parent_id', '=', 0)->get();
        $allCategories = Category::pluck('title','id')->all();
        return view('admin.categories.categories-index', compact('parentCategories','allCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        $category = new Category;
        $category->title = $request->title;
        $category->parent_id = $request->parent_id ?: 0;
        $category->save();
        $last_insereted_id = $category->id;
        if ($request->photo != null) {
            $category->photo = $request->photo->store('img/categories/' . $last_insereted_id);
            $category->save();
        }
        return back()->with('message', 'Нова категорія успішно додана');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $category = Category::findOrFail($id);
        $blogItems = Blog::where('category_id', $id)->get();
        // $articleItems = Article::where('category_id', $id)->get();
        // $serviceItems = Service::where('category_id', $id)->get();
        $allCategories = Category::pluck('title','id')->all();
        unset($allCategories[$id]);
        return view('admin.categories.categories-edit', compact(['category', 'allCategories', 'blogItems', 'articleItems', 'serviceItems']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCategoryRequest $request, int $id)
    {
        $category = Category::findOrFail($id);
        $category->title = $request->title;
        $category->parent_id = $request->parent_id ?: 0;
        $category->save();
        $last_insereted_id = $category->id;
        if ($request->photo != null) {
            if($category->photo) {
                Storage::disk('local')->delete($category->photo);
            }
            $category->photo = $request->photo->store('img/categories/' . $last_insereted_id);
            $category->save();
        }
        return redirect()->route('admin/category.index')->with(['message' => 'Категорія успішно оновлена']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        Storage::disk('local')->deleteDirectory('img/categories/' . $id);
        $blogItems = Blog::where('category_id', $id)->get();
        foreach ($blogItems as $blogItem) {
            $blogItem->category_id = null;
            $blogItem->save();
        }
        // $articleItems = Article::where('category_id', $id)->get();
        // foreach ($articleItems as $articleItem) {
        //     $articleItem->category_id = null;
        //     $articleItem->save();
        // }
        // $serviceItems = Service::where('category_id', $id)->get();
        // foreach ($serviceItems as $serviceItem) {
        //     $serviceItem->category_id = null;
        //     $serviceItem->save();
        // }
        $childCategories = Category::where('parent_id', $id)->get();
        foreach ($childCategories as $childCategory) {
            $childCategory->parent_id = 0;
            $childCategory->save();
        }
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('admin/category.index')->with(['message' => 'Категорія успішно видалена']);
    }

    public function removeItemFromCategory(int $id, string $type)
    {
        if($type == 'blog') {
            $item = Blog::findOrFail($id);
            $message = 'Новина успішно видалена за даної категорії';
        } elseif($type == 'article') {
            $item = Article::findOrFail($id);
            $message = 'Стаття успішно видалена за даної категорії';
        } else {
            $item = Service::findOrFail($id);
            $message = 'Послуга успішно видалена за даної категорії';
        }

        $item->category_id = null;
        $item->save();
        return back()->with('message', $message);
    }
}
