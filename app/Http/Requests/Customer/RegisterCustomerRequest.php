<?php

namespace App\Http\Requests\Customer;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RegisterCustomerRequest extends FormRequest
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
            'dni' => 'required|unique:customers|max:45',
            'name' => 'required|max:45',
            'last_name' => 'required|max:45',
            'address' => 'max:255',
            'email' => 'required|unique:customers|max:120',
            'id_reg' => 'required|exists:regions,id_reg',
            'id_com' => [
                'required',
                Rule::exists('communes')->where(function ($query) {
                    $query->where('id_com', request()->id_com)
                        ->where('id_reg', request()->id_reg);
                }),
            ]
        ];
    }
}
