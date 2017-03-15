<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class regValidater extends FormRequest
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
        $this->sanitize();
        return [
            'name'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:8|max:20',
            'phone'=>'required|numeric|digits_between:10,10',
            'college'=>'required|max:255',
        ];
    }
    public function messages()
    {
        return [
          'email.unique'=>'You are allredy registered ',
        ];
    }
    public function sanitize()
    {
        $input = $this->all();
        $input['name'] = filter_var($input['name'], FILTER_SANITIZE_STRING ,FILTER_FLAG_STRIP_HIGH);
        $input['password'] = filter_var($input['password'],
            FILTER_SANITIZE_STRING);

        $this->replace($input);
    }
}
