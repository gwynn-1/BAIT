<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class BlogNewsController extends Controller
{
    //
    public function index($id,$url,Request $req){
        try{
            $blog_news = DB::table("blog_news")->select("title","content","author","created_at")->where("id",$id)->where("url_blog",$url)->first();
            $breaking = DB::table("blog_news")->select("id","title","main_image","url_blog")->where("breaking","1")->where("id","<>",$id)->limit(5)->get();
            return view("blog-news",["title"=>"Blog & News :: ".$blog_news->title,"blog_news"=>$blog_news,"breaking"=>$breaking]);
        }catch (\Exception $e){
            return view("errors.404");
        }
    }

    public function indexblog(Request $req){
        $blog_news = DB::table("blog_news")->select("id","title","main_image","description","url_blog")->paginate(5);
        if($req->ajax()){
            return view("ajax-paging.ajax-paging-bn-all",["blog_news"=>$blog_news]);
        }
        if(!empty($req->input("ts"))){
            $blog_news = DB::table("blog_news")
                ->select("id","title","main_image","description","url_blog")
                ->where("title","like","%".$req->input("ts")."%")
                ->paginate(5);
        }
        return view("blog-news-all",["title"=>"Blog & News :: All","blog_news"=>$blog_news]);
    }
}
