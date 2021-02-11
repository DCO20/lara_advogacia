<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdatePost extends FormRequest
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
        $id = $this->segment(3);

        $rules = [
            'title' => ['required', 'string', 'min:3', 'max:255', "unique:posts,title,{$id},id"],
            'about' => ['required', 'string', 'min:5', 'max:255'],
            'content' => ['required', 'min:5', 'max:1000'],
            'image' => ['required', 'image'],
        ];

        if ($this->method() == 'PUT') {
            $rules['image'] = ['nullable'];
        }

        return $rules;
    }
}
