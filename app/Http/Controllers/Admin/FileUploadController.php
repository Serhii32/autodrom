<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ImageUploadRequest;

class FileUploadController extends Controller
{
    public function uploadImage(ImageUploadRequest $request)
    {
    	$image = $request->file('upload');
	    $url = $image->store('img/uploads');
	    $funcNum = $request->input('CKEditorFuncNum');

	    return response(
	        "<script>
	            window.parent.CKEDITOR.tools.callFunction({$funcNum}, '/{$url}', 'Зображення успішно завантажено');
	        </script>"
	    );
    }
}
