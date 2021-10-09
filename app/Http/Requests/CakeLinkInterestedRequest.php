<?php

namespace App\Http\Requests;

use App\Rules\cakeInterestedExist;
use Illuminate\Foundation\Http\FormRequest;

class CakeLinkInterestedRequest extends FormRequest
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
            'cake_id' => 'required|exists:cakes,id',
            'interested_id' => 'required|exists:interested_list,id'
        ];
    }
}
