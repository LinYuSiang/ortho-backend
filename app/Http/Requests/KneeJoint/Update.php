<?php

namespace App\Http\Requests\KneeJoint;

use Illuminate\Foundation\Http\FormRequest;

class Update extends FormRequest
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
            'medical_record_no' => 'required|string',
            'name' => 'required|string',
            'birthday' => 'required|date',
            'height' => 'required|numeric',
            'weight' => 'required|numeric',
            'bmi' => 'numeric|required_with:height,weight',
        ];
    }
}
