<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CouponRequest extends FormRequest
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
            'coupon_code' => 'required',
            'current_date'=>'date|after:start_date|before:end_date',
        ];
    }

    public function messages()
    {
        return [
            'coupon_code.required' =>'Vui lòng không để trống',
            'current_date.date'=>'Errors',
            'current_date.before'=>'Toang roi',
            'current_date.after'=>'Chua den luc su dung',
        ];
    }
}
