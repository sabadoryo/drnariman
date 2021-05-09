<?php

namespace App\Http\Requests\Admin\Disease;

use Illuminate\Foundation\Http\FormRequest;

class StoreDiseaseRequest extends FormRequest
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
            'name' => 'required|string',
            'service_id' => 'required|integer|exists:services,id',
            'description' => 'required',
            'icon' => 'required|image',
            'main_image' => 'required|image'
        ];
    }
}