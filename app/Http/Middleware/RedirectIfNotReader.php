<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfNotReader
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle($request, Closure $next, $guard = 'readers')
    {
        if(!Auth::guard($guard)->check()){
            if($request->ajax()) {
                $response = [
                    "type" => 'failed',
                    "message" => "Bạn chưa đăng nhập, mời bạn đăng nhập trước khi mượn sách"
                ];
                return response()->json($response);
            }
            else{
                return redirect("/");
            }
        }
        return $next($request);
    }
}
