<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class BuRequest extends Request
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
            'bu_name'=>"required|min:5|max:100",
            'rooms'=>"required|integer",
            'bu_price'=>"required",
            'bu_rent'=>"required|integer",
            'bu_square'=>"required|integer",
            'bu_type'=>"required|integer",
            'bu_small_disc'=>"required|min:5|max:160",
            'bu_meta'=>"required|min:5|max:200",
            'bu_langitude'=>"required",
            'bu_latitude'=>"required",
            'bu_large_disc'=>"required|min:5",
            'bu_status'=>"required|integer",
        ];
    }
}
