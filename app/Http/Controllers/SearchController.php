<?php

namespace App\Http\Controllers;

use App\Models\Book_type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Book;

class SearchController extends Controller
{
    //
    private $book;
    private $booktype;

    public function __construct(Book $book,Book_type $book_type)
    {
        $this->book = $book;
        $this->booktype = $book_type;
    }

    public function index(Request $req){
        $category = $req->input("category");
        $key = $req->input("key");
        if($key!="") {
            $result = $this->book->searchBookByIdType($category, $key, false);
            if ($category != "All")
                $name = $this->booktype->getBookTypeById($category);
            if ($category == "All") {
                $result = $this->book->searchBookAll($key, false);
                $name = null;
            }
            $count = count($result);
            return view("search",["title"=>"Tìm kiếm được ".$count." sách","books"=>$result,"count"=>$count,"key"=>$key,"name_category"=>$name]);
        }
        return view("search",["title"=>"Tìm kiếm được 0 sách","count"=>0,"key"=>$key,"name_category"=>null]);
    }

    public function searchAjax(Request $req){
        if($req->ajax() && !empty($req->input("value"))){
            $result = $this->book->searchBookByIdType($req->input("id_type"),$req->input("value"),true);
            if($req->input("id_type") == "All"){
                $result = $this->book->searchBookAll($req->input("value"),true);
            }
            return $result;
        }
    }
}
