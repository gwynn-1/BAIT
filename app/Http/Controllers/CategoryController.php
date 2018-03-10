<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Book_type;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    private $book;
    private $book_type;

    public function __construct(Book_type $book_type,Book $book)
    {
        $this->book = $book;
        $this->book_type=$book_type;
    }

    public function index($ctname,Request $res){
        try{
            $current_category= $this->book_type->getBookTypeByUrl($ctname);
            $books = $this->book->getBooksSameCategoryPaginatorByUrl($ctname,9);
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
        return $this->book->getBooksSameCategoryByTextSearch($ctname,9,$req->input("textvalue"));
    }

    private function getQueryRadioResult($ctname,Request $req){
        return $this->book->getBooksSameCategoryByRadioSearch($ctname,9,$req->input("radiovalue"));
    }
}
