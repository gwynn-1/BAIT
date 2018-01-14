<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    //
    public function index($ctname,Request $res){
        try{
            $current_category= DB::table("book_type")->select("name","id")->where("type_url",$ctname)->get();
            $books = DB::table("books")->join("book_type", "books.id_type", "=", "book_type.id")
                ->select("books.name", "books.id", "books.available", "books.image", "books.url_book")
                ->where("book_type.type_url", $ctname)
                ->paginate(9);
            if($res->ajax()){
                if($res->input("typevalue")=="textsort"){
                    $books = $this->getQueryTextResult($ctname,$res);
                }
                elseif ($res->input("typevalue")=="radiosort"){
                    $books = $this->getQueryRadioResult($ctname,$res);
                }
                return view("ajax-paging.ajax-paging-category",["books"=>$books]);
            }
            return view("category",["title"=>"Category :: ".$current_category[0]->name,"current_category"=>$current_category,"books"=>$books]);
        }catch (\Exception $e){
            return view("errors.404");
        }
    }

    private function getQueryTextResult($ctname,Request $req){
        $books = DB::table("books")
            ->join("book_type", "books.id_type", "=", "book_type.id")
            ->select("books.name", "books.id", "books.available", "books.image", "books.url_book")
            ->where("book_type.type_url", $ctname)
            ->where("books.name_book", "like", '%' . $req->input("textvalue") . '%')
            ->paginate(9);
        return $books;
    }

    private function getQueryRadioResult($ctname,Request $req){
            if ($req->input("radiovalue") == "recommend") {
                $books = DB::table("books")->join("book_type", "books.id_type", "=", "book_type.id")
                    ->select("books.name", "books.id", "books.available", "books.image", "books.url_book")
                    ->where("book_type.type_url", $ctname)
                    ->where("books.recommend_book", "1")
                    ->paginate(9);
            } elseif ($req->input("radiovalue") == "available") {
                $books = DB::table("books")->join("book_type", "books.id_type", "=", "book_type.id")
                    ->select("books.name", "books.id", "books.available", "books.image", "books.url_book")
                    ->where("book_type.type_url", $ctname)
                    ->where("books.available", ">", "0")
                    ->paginate(9);
            } elseif ($req->input("radiovalue") == "favorite") {
                $books = DB::table("books")->join("book_type", "books.id_type", "=", "book_type.id")
                    ->select("books.name", "books.id", "books.available", "books.image", "books.url_book")
                    ->where("book_type.type_url", $ctname)
                    ->whereRaw('books.available<=books.total/2')
                    ->paginate(9);
            }
            else{
                $books = DB::table("books")->join("book_type", "books.id_type", "=", "book_type.id")
                    ->select("books.name", "books.id", "books.available", "books.image", "books.url_book")
                    ->where("book_type.type_url", $ctname)
                    ->paginate(9);
            }
            return $books;
    }
}
