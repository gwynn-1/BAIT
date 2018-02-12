<?php

namespace App\Http\Controllers\Auth;

use App\Models\Reader;
use App\Models\ReaderEmailToken;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\API\TokenCreator;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReaderRegisterTokenEmail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('readers');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $validator = Validator::make($data, [
            'readername' => 'required|string|min:5|max:255|unique:readers,username',
            'name' => 'required|string|min:5|max:255',
            'email' => 'required|string|email|max:512|unique:readers,email',
            'password' => 'required|string|min:6|max:255|confirmed',
            'mssv'=>'min:3|max:50',
            'facebook'=>'min:3|max:100',
            'sdt'=>"required|numeric",
            'captcha' => 'required|captcha'
        ],[
            "captcha"=>"Captcha không chính xác.",
            "min"=>":attribute phải lớn hơn :min kí tự",
            "max"=>':attribute phải bé hơn :max kí tự',
            "unique"=>":attribute đã tồn tại trong hệ thống",
            "required"=>":attribute bắt buộc phải nhập",
            "string"=>":attribute bắt buộc nhập chữ",
            "email"=>":attribute bắt buộc nhập theo định dạng mail",
            "confirmed"=>"Xác nhận :attribute không trùng khớp",
            "numeric"=>":attribute phải là định dạng số"
        ]);

        $validator->setAttributeNames([
            "readername" => "Tên đăng nhập",
            "name"=>"Họ & Tên",
            "email"=>"Email",
            "password"=>"Password",
            "mssv"=>"Mã số sinh viên",
            "sdt"=>"Số điện thoại",
            "facebook"=>"Facebook",
            "captcha"=>"Captcha"
        ]);
        return $validator;
    }

    public function generateCaptcha(){
        return captcha_img();
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        if($this->create($request->all())){
            return redirect("/")->with('register_status',"success");
        }
        else{
            return redirect("/")->with('register_status',"fail");
        }
    }

    public function confirmSignup(Request $req, $token,$tokendate){
        $now = strtotime(Carbon::now());
        $token_email = ReaderEmailToken::select("is_token")->where("token",$token)->first();
        if($token_email ==null || $tokendate+86400<$now){
            return view("errors.404");
        }
        if($token_email->is_token = 1){
            $is_token = 1;
            return view("mail-signuptoken",["is_token"=>$is_token]);
        }
        ReaderEmailToken::where("token",$token)->update([
            "is_token"=>1
        ]);
        return view("mail-signuptoken");
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        try{
            DB::statement("ALTER TABLE readers AUTO_INCREMENT=1");
            DB::statement("ALTER TABLE reader_emailtoken AUTO_INCREMENT=1");
            $token = TokenCreator::createToken("reader_emailtoken","token");
            $token_date = Carbon::now();

            DB::beginTransaction();
            $reader = Reader::create([
                'username' => $data['readername'],
                'name'=>$data['name'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
                'mssv'=>$data["mssv"],
                "school"=>$data["school"],
                "facebook"=>$data["facebook"],
                "sdt"=>$data["sdt"],
            ]);

            ReaderEmailToken::create([
                "id_reader"=>$reader->id,
                "token"=>$token,
                "token_date"=>$token_date,
                "is_token"=> 0
            ]);

            DB::commit();

            Mail::to($data['email'])->send(new ReaderRegisterTokenEmail($token,strtotime($token_date)));
            return true;
        }catch (\Exception $e){
            return false;
        }
    }

    protected function guard()
    {
        return Auth::guard("readers");
    }
}
