<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;


class ReaderRequest extends \Backpack\CRUD\app\Http\Requests\CrudRequest
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
            'mssv'=>"required",
            'school'=>"required",
            'email'=>'required|email',
            'sdt'=>'required|numeric',
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
            'mssv'=>"MSSV",
            "school"=>'Trường',
            "sdt"=>"Số điện thoại"
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
            "email"=>":attribute phải là định dạng email"
        ];
    }
}
