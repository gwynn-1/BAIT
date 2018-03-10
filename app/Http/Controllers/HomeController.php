<?php

namespace App\Http\Controllers;

use App\Models\Blog_news;
use Illuminate\Http\Request;
use App\Models\Book;

class HomeController extends Controller
{
    //
    private $book;
    private $blog_news;

    public function __construct(Book $book,Blog_news $blog_news)
    {
        $this->book = $book;
        $this->blog_news = $blog_news;
    }

    public function index(Request $res){

        try{
        $books = $this->book->BookPaginator(8);
        if($res->ajax()){
            return view("ajax-paging.ajax-paging-index",["books"=>$books]);
        }
        $recommend_book = $this->book->getRecommendBook();
        $breaking_news = $this->blog_news->getBreakingNews();
        $blog_news = $this->blog_news->getBlogNewsWithLimit(6);
        return view("home",["title"=>"Home","recommend_book"=>$recommend_book,"books"=>$books,"breaking_news"=>$breaking_news,"blog_news"=>$blog_news]);
        }catch (\Exception $e){
            return view("errors.404");
        }
    }
}
