<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    //
    public function searchAjax(Request $req){
        if($req->ajax() && !empty($req->input("value"))){
            $result = DB::table("books")
                ->select("id","name","url_book")
                ->where("id_type",$req->input("id_type"))
                ->where("name", "like", '%' . $req->input("value") . '%')
                ->limit(10)->get();
            if($req->input("id_type") == "All"){
                $result = DB::table("books")
                    ->select("id","name","url_book")
                    ->where("name", "like", '%' . $req->input("value") . '%')
                    ->limit(10)->get();
            }
            return $result;
        }
    }
}
