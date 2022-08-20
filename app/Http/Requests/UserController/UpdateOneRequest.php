<?php

namespace App\Http\Requests\UserController;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOneRequest extends FormRequest
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
            'name'=>['string','max:100'],
            'address'=>['string','max:100'],
            'address'=>['string','max:100'],
         ];
    }
}
