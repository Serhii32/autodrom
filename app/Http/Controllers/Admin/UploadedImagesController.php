<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Validation\Factory;

class UploadedImagesController extends Controller
{
    public function index()
    {

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
