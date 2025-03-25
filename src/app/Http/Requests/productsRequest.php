<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class productsRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'price' => ['required', 'numeric'],
            'season' => ['required', 'checkbox'],
            'description' => ['required', 'string'],
        ];
    }
    public function messages()
    {
        return [
            'name.required' => '商品名を入力してください',
            'price.required' => '値段を入力してください',
            'price.numeric' => '電話番号を数値で入力してください',
            'season.checkbox' => '季節を選択してください',
            'name.description' => '商品説明を入力してください',
            'image.Registration' => '商品画像を登録してください',
}