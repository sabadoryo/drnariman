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
            'icon' => 'required|mimetypes:image/svg',
            'main_image' => 'required|image| mimetypes:text/plain,image/png,image/jpeg,image',
            'specialists' => 'required|array|min:1',
            'specialists.*' => 'exists:specialists,id',
            'previous_works' => 'required',
//            'previous_works.*' => 'exists:previous_works,id',
            'previous_works.*.patient_name' => 'required|string',
            'previous_works.*.description' => 'required',
            'previous_works.*.image_before' => 'required|image',
            'previous_works.*.image_after' => 'required|image'
        ];
    }
}
