<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    protected $data = [];
    //
    public function loadViewAction(){
        $this->data['title'] = trans('backpack::base.dashboard'); // set the page title
        $expire_dates = DB::table("borrow_detail")->select("id")->whereDate("expire_date","<",Carbon::now())->count();
        $unreturn_rec = DB::table("borrow_detail")
                            ->select("id")
                            ->whereDate("return_date","<",Carbon::now())
                            ->where("is_return","0")
                            ->where("is_keep","0")->count();
        $this->data['expire_date_count'] = $expire_dates;
        $this->data['unreturn_date_count'] = $unreturn_rec;
        return view('backpack::dashboard', $this->data);
    }
}
