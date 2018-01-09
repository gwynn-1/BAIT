<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index(Request $res){
        $books = DB::table("books")->select("id","name","image","available","url_book")->paginate(8);
        if($res->ajax()){
            return view("ajax-paging.ajax-paging-index",["books"=>$books]);
        }
        $recommend_book = DB::table("books")->select("id","name","image","available","url_book")->where("recommend_book","1")->get();
        $breaking_news = DB::table("blog_news")->select("id","title","main_image","url_blog")->where("breaking","1")->get();
        $blog_news = DB::table("blog_news")->select("id","title","main_image","url_blog")->limit(6)->get();
        return view("home",["title"=>"Home","recommend_book"=>$recommend_book,"books"=>$books,"breaking_news"=>$breaking_news,"blog_news"=>$blog_news]);
    }
}
