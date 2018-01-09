<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    public function index($id,$url,Request $req){
        $book_info = DB::table("books")->select("name","detail","author","image","available","id_type")->where("id",$id)->where("url_book",$url)->first();
        $category_books = DB::table("books")->join("book_type","books.id_type","=","book_type.id")->select("book_type.name","book_type.type_url")->where("books.id",$id)->where("books.url_book",$url)->first();
        $same_books = DB::table("books")->select("id","name","image","available","url_book")->where("id_type",$book_info->id_type)->where("id","<>",$id)->limit(20)->get();
        $recommend_book = DB::table("books")->select("id","name","image","available","url_book")->where("recommend_book","1")->where("id","<>",$id)->limit(5)->get();
        return view("book-product",["title"=>"Book :: ".$book_info->name,"books_info"=>$book_info,"category_books"=>$category_books,"same_books"=>$same_books,"recommend_book"=>$recommend_book]);
    }
}
