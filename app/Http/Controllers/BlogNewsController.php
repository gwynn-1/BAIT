<?php

namespace App\Http\Controllers;

use App\Models\Blog_news;
use Illuminate\Http\Request;

class BlogNewsController extends Controller
{
    //
    private $blog_news;

    public function __construct(Blog_news $bn)
    {
        $this->blog_news = $bn;
    }

    public function index($id,$url,Request $req){
        try{
            $blog_news = $this->blog_news->getBlogNewsById($id,$url);
            $breaking = $this->blog_news->getBreakingNewsWithLimit(5,$id);
            return view("blog-news",["title"=>"Blog & News :: ".$blog_news->title,"blog_news"=>$blog_news,"breaking"=>$breaking]);
        }catch (\Exception $e){
            return view("errors.404");
        }
    }

    public function indexblog(Request $req){
        $blog_news = $this->blog_news->getBlogNewsPaginator(5);
        if($req->ajax()){
            return view("ajax-paging.ajax-paging-bn-all",["blog_news"=>$blog_news]);
        }
        if(!empty($req->input("ts"))){
            $blog_news = $this->blog_news->getBlogNewsBySearch($req->input("ts"),5);
        }
        return view("blog-news-all",["title"=>"Blog & News :: All","blog_news"=>$blog_news]);
    }
}
