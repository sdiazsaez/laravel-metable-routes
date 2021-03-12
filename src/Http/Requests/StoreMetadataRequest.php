<?php

namespace Larangular\MetableRoutes\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMetadataRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'key'   => 'required|string|max:255',
            'value' => 'required',
            'id'    => 'nullable|numeric',
        ];
    }
}
