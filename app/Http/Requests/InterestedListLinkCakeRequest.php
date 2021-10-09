<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InterestedListLinkCakeRequest extends FormRequest
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
            'interested_id' => 'required|exists:interested_list,id',
            'cake_id' => 'required|exists:cakes,id'
        ];
    }
}
