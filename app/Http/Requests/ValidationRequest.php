<?php

namespace App\Http\Requests;

use App\Rules\Uppercase;
use App\Rules\ValidPhone;
use Illuminate\Foundation\Http\FormRequest;

class ValidationRequest extends FormRequest
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
            'email'=>'required|email',
            'password'=>'required|min:4|max:8',
            'address'=>['required',new Uppercase()],
            'address_2'=>['required',new ValidPhone()],
            'city'=>'required',
            'state'=>'required|in:Mirpur-1,Mirpur-2,Mirpur-10,Mirpur-12',
            'postal'=>'required',
            'condation'=>'accepted'
        ];
    }

    public function message(){
        return [
            'email.email'=>'email is required',
            'email.required'=>'email is unvalid',
        ];
    }
}
