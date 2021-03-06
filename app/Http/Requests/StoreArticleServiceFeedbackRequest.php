<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleServiceFeedbackRequest extends FormRequest
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
            'title' => 'required|max:255',
            'short_description' => 'max:1000',
            'main_photo' => 'mimetypes:image/jpeg,image/png,image/jpg,image/gif|max:20000',
            'titleSEO' => 'max:255',
            'descriptionSEO' => 'max:1000',
            'keywordsSEO' => 'max:255',
        ];
    }
}
