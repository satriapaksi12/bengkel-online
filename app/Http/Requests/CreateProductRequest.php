<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CreateProductRequest extends FormRequest
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
            'name' => 'required',
            'brand' => 'required',
            //'price' => 'required|integer',
            'category_id' => 'required',
            'user_id' => 'required',
            'slug' => 'required',
            'desc' => 'required',
            'spec' => 'required',
            'image' => 'required|max:2048',
        ];
    }
    public function prepareForValidation()
    {
        $category = explode(',', request('category'));
        $this->merge([
            'category_id' => $category[0],
            'slug' => strtolower($category[1]),
            'image' =>request()->file('product_image')->store('product_image'),
            'user_id' => Auth::user()->id,
        ]);
    }
}
