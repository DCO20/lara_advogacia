<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateTeam extends FormRequest
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
            'name' => ['required', 'string', 'min:3', 'max:255'],
            'email' => ['required', 'string', 'email', 'min:3', 'max:255', "unique:teams,email,{$id},id"],
            'occupation' => ['required', 'string', 'max:250'],
            'phone' => ['required', 'string', 'min:6', 'max:16'],
            'image' => ['required', 'string'],
            'link_facebook' => ['required','string', 'max:250'],
            'link_linkdin' => ['required', 'string', 'max:250'],
            'link_instagram' => ['required','string','max:250'],
            'link_twitter' => ['required', 'string', 'max:250'],
        ];

        if ($this->method() == 'PUT') {
            $rules['image'] = ['nullable', 'string'];
        }

        return $rules;
    }
}
