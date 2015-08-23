<?php

namespace MiTutorialDigital\Http\Requests;

use MiTutorialDigital\Http\Requests\Request;

class FrontRegisterRequest extends Request
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
            'pin_code'      => 'required|digits:8|exists:pins,name,active,1',
            'name'          => 'required',
            'course_id'     => 'required|not_in:0',
            'subject_id'    => 'required|not_in:0',
            'email'         => 'required|email',
            'password'      => 'required|min:8'
        ];
    }
}
