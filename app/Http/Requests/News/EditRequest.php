<?php

namespace App\Http\Requests\News;

use Illuminate\Foundation\Http\FormRequest;

class EditRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|min:3',
            'author' => 'required|string|min:3',
            'image' => 'nullable',
            'status' => 'required|string|min:5|max:7',
            'description' => 'required|string',
            'category_id' => 'required|integer'
        ];
    }
    public function messages()
    {
        return parent::messages(); // TODO: Change the autogenerated stub
    }
    public function attributes()
    {
        return parent::attributes(); // TODO: Change the autogenerated stub
    }
}
