<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use App\Models\Reader;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers {
        login as protected origin_login;
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';
    protected $guard = "readers";

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('readers')->except('logout');
    }

    public function username()
    {
        return "username";
    }

    protected function authenticated(Request $request, $user)
    {
        return redirect("/");
    }

    public function guard()
    {
        return Auth::guard($this->guard);
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            "login_failed" => [trans('auth.failed')],
        ]);
    }

    public function login(Request $request)
    {
        if( Reader::isReaderToken( $request->input($this->username())) == 0){
            throw ValidationException::withMessages([
                "login_failed" => "Bạn chưa kích hoạt tài khoản, kiểm tra email để kich hoạt.",
            ]);
        }
        return $this->origin_login($request);
    }

    protected function validateLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|min:5|max:255',
            'password' => 'required|string|min:6|max:255',
        ],[
            "min"=>":attribute phải lớn hơn :min kí tự",
            "max"=>':attribute phải bé hơn :max kí tự',
            "required"=>":attribute bắt buộc phải nhập",
            "string"=>":attribute bắt buộc nhập chữ",
        ]);

        $validator->setAttributeNames([
            "username" => "Tên đăng nhập",
            "password"=>"Password"
        ]);
        return $validator;
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();
        return redirect("/");
    }
}
