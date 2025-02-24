<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
        $rules = [
            'img_url' => 'required|image',
        ];

        if ($this->route('user_id')) {
            $rules['img_url'] = 'image';
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'img_url.required' => '画像ファイル(jpg png)を選択してください',
            'img_url.image' => '画像ファイル(jpg png)を選択してください',
        ];
    }
}
