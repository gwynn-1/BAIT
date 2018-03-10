<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    private $book;

    public function __construct(Book $book)
    {
        $this->book = $book;
    }

    public function index($id,$url,Request $req){
        try{
            $book_info = $this->book->getBookById($id,$url);
            $same_books = $this->book->getBookSameCategoryWithLimit($book_info->id_type,$id,20);
            $category_books = $this->book->getBookCategory($id,$url);
            $recommend_book = $this->book->getRecommendBook($id,5);
            return view("book-product",["title"=>"Book :: ".$book_info->name,"books_info"=>$book_info,"category_books"=>$category_books,"same_books"=>$same_books,"recommend_book"=>$recommend_book]);
        }catch (\Exception $e){
            return view("errors.404");
        }
    }
}
