<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class Borrow_detailRequest extends \Backpack\CRUD\app\Http\Requests\CrudRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return \Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'return_date'=>'nullable|date|after:borrow_date',
            'borrow_date'=>'nullable|date',
            'expire_date'=>'nullable|date'
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
            'id'=>'nullable|numeric',
            "return_date"=>"Ngày trả",
            "borrow_date"=>"Ngày mượn",
            "expire_date"=>"Ngày hết hạn",
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            //
            "after"=>":attribute phải là ngày sau :date",
            "date"=>":attribute phải là định dạng ngày",
            "numeric"=>":attribute phải là định dạng số",
            "required"=>":attribute không được bỏ trống"
        ];
    }
}
