<?php

namespace App\Http\Controllers;

use App\Mail\SendContactFromClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    private $_redirectTo = "contact";

    public function index(Request $req){
        return view('contact',['title'=>'Contact']);
    }

    public function validator(array $input){
        $validator = Validator::make($input,[
            "subject"=>"required|string|min:5|max:500",
            "name"=>"required|string|min:5|max:255",
            "email"=>'required|email|string|min:5|max:255',
            "mail-content"=>"required|string|min:5|max:5000",
            'file' => 'mimes:jpeg,jpg,png,bmp,tiff|max:4096',
        ],[
            "required"=>":attribute bắt buộc phải nhập",
            "string"=>":attribute bắt buộc nhập chữ",
            "email"=>":attribute bắt buộc nhập theo định dạng mail",
            "min"=>":attribute phải lớn hơn :min kí tự",
            "max"=>':attribute phải bé hơn :max kí tự',
            'mimes' => 'Chỉ được đính kèm file hình'
        ]);

        $validator->setAttributeNames([
            "subject"=>'Tiêu đề',
            "name"=>"Tên",
            "email"=>"Email",
            "mail-content"=>"Message",
            "file"=>"Đính kèm"
        ]);
        return $validator;
    }

    public function sendEmailFromUser(Request $req){
        $validator = $this->validator($req->all());
         if($validator->fails()){
             return redirect($this->_redirectTo)->withErrors($validator, 'contact_validate');
         }

         $subject = $req->input("subject");
         $name = $req->input("name");
         $email = $req->input("email");
         $file = $req->file("file");
         $message= $req->input("mail-content");

//         try{
             Mail::to($_ENV['MAIL_USERNAME'])->queue(new SendContactFromClient($subject,$name,$email,$message,$file->getRealPath(),$file->getClientOriginalName(),$file->getMimeType()));
//         }catch (\Exception $e){
//             return redirect($this->_redirectTo)->with(["fail_send_mail"=>"Gửi mail bị lỗi"]);
//         }
         return redirect($this->_redirectTo)->with(["success_send_mail"=>"Gửi mail thành công"]);
    }
}
