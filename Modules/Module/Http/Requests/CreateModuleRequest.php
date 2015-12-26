<?php namespace Modules\Module\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateModuleRequest extends FormRequest
{
    public function rules()
    {
        return [
            'vendor' => 'required',
            'name' => 'required',
            'excerpt' => 'required',
            'category' => 'required',
            'description' => 'required',
            'documentation' => 'required',
        ];
    }

    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        return [];
    }
}
