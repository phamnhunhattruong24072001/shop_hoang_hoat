<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
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
        $id = \Request::segments()[2];
        return [
            'category_name' => ['required', Rule::unique('category', 'category_name')->ignore($id, 'id'), 'max:255'],
            'category_slug' => ['required', Rule::unique('category', 'category_slug')->ignore($id, 'id'), 'max:255'],
            'category_parent_id' => 'nullable',
            'category_image' => 'required|string',
        ];
    }

    public function messages(){
        return [
            'category_name.required' => 'Tên danh mục không được để trống !',
            'category_slug.required' => 'Đường dẫn danh mục không được để trống !',
            'category_image.required' => 'Hình ảnh không được để trống !',
            'category_name.unique' => 'Tên danh mục này đã tồn tại !',
            'category_slug.unique' => 'Đường dẫn này đã tồn tại !',
        ];
    }
}