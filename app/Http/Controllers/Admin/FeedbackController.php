<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Feedback;
use App\Http\Requests\StoreArticleServiceFeedbackRequest;
use Illuminate\Support\Facades\Storage;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $identificator;

    public function __construct() 
    {
        $this->identificator = 'feedback';
    }

    public function index()
    {
        $items = Feedback::paginate(12);
        return view('admin.feedback_article_service.index', compact(['items']), ['identificator' => $this->identificator]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.feedback_article_service.create', ['identificator' => $this->identificator]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticleServiceFeedbackRequest $request)
    {
        $item = new Feedback();
        $item->title = $request->title;
        $item->description = $request->description;
        $item->short_description = $request->short_description;
        $item->titleSEO = $request->titleSEO;
        $item->descriptionSEO = $request->descriptionSEO;
        $item->keywordsSEO = $request->keywordsSEO;
        $item->save();
        $last_insereted_id = $item->id;
        if ($request->main_photo != null) {
            $item->main_photo = $request->main_photo->store('img/site/feedback/' . $last_insereted_id);
            $item->save();
        }
        return redirect()->route('admin/feedback.index')->with(['message' => 'Відгук доданий успішно']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $item = Feedback::findOrFail($id);
        return view('admin.feedback_article_service.show', compact(['item']), ['identificator' => $this->identificator]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $item = Feedback::findOrFail($id);
        return view('admin.feedback_article_service.edit', compact(['item']), ['identificator' => $this->identificator]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreArticleServiceFeedbackRequest $request, int $id)
    {
        $item = Feedback::findOrFail($id);
        $item->title = $request->title;
        $item->description = $request->description;
        $item->short_description = $request->short_description;
        $item->titleSEO = $request->titleSEO;
        $item->descriptionSEO = $request->descriptionSEO;
        $item->keywordsSEO = $request->keywordsSEO;
        $item->save();
        $last_insereted_id = $item->id;

        if ($request->main_photo != null) {

            if($item->main_photo) {
                Storage::disk('local')->delete($item->main_photo);
            }

            $item->main_photo = $request->main_photo->store('img/site/feedback/' . $last_insereted_id);
            $item->save();
        }

        return redirect()->route('admin/feedback.index')->with(['message' => 'Відгук успішно оновлений']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        Storage::disk('local')->deleteDirectory('img/site/feedback/' . $id);
        $item = Feedback::findOrFail($id);
        $item->delete();
        return redirect()->route('admin/feedback.index')->with(['message' => 'Відгук успішно видалений']);
    }
}
