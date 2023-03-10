<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'string',
            'content' => 'string',
            'image' => 'array',
            'category_id' => 'integer',
            'imageIdForDelete' => 'nullable|array'
        ];
    }

    public function messages()
    {
        return [
//            'title.required' => 'Это обязательное поле',
//            'title.string' => 'Данные некорректны',
//            'content.required' => 'Это обязательное поле',
//            'main_image.required' => 'Это обязательное поле',
//            'preview_image.required' => 'Это обязательное поле',
//            'content.string' => 'Данные некорректны',
//            'preview_image.string' => 'Это обязательное поле',
//            'main_image.string' => 'Это обязательное поле',
//            'preview_image.file' => 'Файл не соответствует требованиям',
//            'main_image.file' => 'Файл не соответствует требованиям',
//            'category_id.required' => 'Это обязательное поле',
//            'category_id.integer' => 'Данные некорректны',
//            'category_id.exists:categories,id' => 'Похоже категория не совпадает с БД',
        ];
    }
}
