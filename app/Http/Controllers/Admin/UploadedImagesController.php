<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Validation\Factory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Crypt;

class UploadedImagesController extends Controller
{
    public function index()
    {
    	$entries = collect(Storage::allFiles('img/uploads'));
    	$currentPage = LengthAwarePaginator::resolveCurrentPage();
        $perPage = 8;
        $currentPageSearchResults = $entries->slice(($currentPage - 1) * $perPage, $perPage)->all();
        $images = new LengthAwarePaginator($currentPageSearchResults, count($entries), $perPage);
        $images->setPath(route('admin/uploaded-images.index')); 
    	return view('admin.uploaded_images.index', compact('images'));
    }

    public function destroy(string $image)
    {
    	$decryptedImage = Crypt::decrypt($image);
        Storage::disk('local')->delete($decryptedImage);
        return redirect()->route('admin/uploaded-images.index')->with(['message' => 'Зображення успішно видалено']);
    }

    public function uploadImage(Request $request, Factory $validator)
    {
    	preg_match("#/admin/(.*?)/#", $request->header()['referer'][0], $match); 
    	$targetFolder = $match[1];
    				
    	$v = $validator->make($request->all(), [
	        'upload' => 'required|mimetypes:image/jpeg,image/png,image/jpg,image/gif|max:20000',
	    ]);

	    $funcNum = $request->input('CKEditorFuncNum');

	    if ($v->fails()) {
	        return response(
	            "<script>
	                window.parent.CKEDITOR.tools.callFunction({$funcNum}, '', '{$v->errors()->first()}');
	            </script>"
	        );
	    }

    	$image = $request->file('upload');
	    $url = $image->store('img/uploads/' . $targetFolder);
	    
	    return response(
	        "<script>
	            window.parent.CKEDITOR.tools.callFunction({$funcNum}, '/{$url}', 'Зображення успішно завантажено');
	        </script>"
	    );
    }
}
