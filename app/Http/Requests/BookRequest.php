<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class BookRequest extends \Backpack\CRUD\app\Http\Requests\CrudRequest
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
            'id'=>'nullable|numeric',
            'name' => 'required|min:5|max:255',
            'detail'=>"nullable|min:10|max:1500"
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
            "name"=>"Tên",
            "detail"=>"Chi Tiết"
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
            "numeric"=>":attribute phải là định dạng số",
            "required"=>":attribute không được bỏ trống",
            "size"=>":attribute phải nằm trong khoảng :min và :max từ"
        ];
    }
}
