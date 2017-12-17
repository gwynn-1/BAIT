<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class Blog_newsRequest extends \Backpack\CRUD\app\Http\Requests\CrudRequest
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
            'title' => 'required|min:5|max:255',
            'content'=>"required|min:20|max:1500",
            'author'=>'required'
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
            "title"=>'Tiêu đề',
            'content'=>'Nội dung',
            'author'=>'Tác giả'
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
