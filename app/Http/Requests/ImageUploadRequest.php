<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImageUploadRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'upload' => 'required|mimetypes:image/jpeg,image/png,image/jpg,image/gif|max:20000',
        ];
    }

    public function messages()
    {
        return [
            "upload.required" => "<script>window.parent.CKEDITOR.tools.callFunction(".$this->CKEditorFuncNum.", '', 'Відсутній файл з зображенням');</script>",
            "upload.mimetypes" => "<script>window.parent.CKEDITOR.tools.callFunction(".$this->CKEditorFuncNum.", '', 'Розширення файлу має бути jpeg, png, jpg, gif');</script>",
            "upload.max" => "<script>window.parent.CKEDITOR.tools.callFunction(".$this->CKEditorFuncNum.", '', 'Максимальний розмір зображення 200000 кб');</script>",
        ];
    }
}
