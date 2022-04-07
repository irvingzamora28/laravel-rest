<?php

namespace App\Http\Requests\Customer;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCustomerRequest extends FormRequest
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
            'dni'       => 'unique:customers|max:45',
            'name'      => 'max:45',
            'last_name' => 'max:45',
            'address'   => 'max:255',
            'email'     => 'unique:customers|max:120',
            'status'    => 'in:'.config('constants.statuses.active'). ',' . config('constants.statuses.inactive').','. config('constants.statuses.trash'),
            'id_reg'    => 'exists:regions,id_reg',
            'id_com'   => [
                Rule::exists('communes')->where(function ($query) {
                    $query->where('id_com', request()->id_com)
                        ->where('id_reg', request()->id_reg);
                }),
            ]
        ];
    }
}
