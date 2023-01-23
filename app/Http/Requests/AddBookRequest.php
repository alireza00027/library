<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddBookRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'title' => 'required',
            'writer' => 'required',
            'category_id' => 'required',
            'release_date' => 'required|numeric',
            'book_file' => 'required|mimes:pdf',
            'img' => 'required|mimes:jpeg,png,jpg',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages() {
        return [
            'title.required' => 'فیلد عنوان کتاب الزامی است',
            'writer.required' => 'فیلد نام نویسنده الزامی است',
            'release_date.required' => 'فیلد سال انتشار الزامی است',
            'release_date.numeric' => 'فرمت سال انتشار نادرست است',
            'img.required' => 'فیلد تصویر کتاب الزامی است',
            'img.mimes' => 'فیلد عکس کتاب باید فرمت jpeg یا jpg یا png باشد',
            'book_file.required' => 'فیلد فایل کتاب الزامی است',
            'book_file.mimes' => 'فیلد عکس کتاب باید فرمت pdf باشد',
            'category_id.required' => 'فیلد دسته بندی الزامی است',
        ];
    }
}
