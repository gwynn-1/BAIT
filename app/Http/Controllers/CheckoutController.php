<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Exceptions\InvalidRowIDException;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Borrow_detail;
use Illuminate\Support\Facades\DB;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class CheckoutController extends Controller
{
    //
    private $book;
    private $borrow_detail;

    public function __construct(Book $book,Borrow_detail $br_detail)
    {
        $this->book = $book;
        $this->borrow_detail = $br_detail;
    }

    public function index(Request $req){
        $cart = Cart::instance(Auth::guard("readers")->user()->username)->content();
        $count = count($cart);
        $reader = Auth::guard("readers")->user();
        $recommend_book = $this->book->getRecommendBook();
        return view("cart",["title"=>"Mục Quan Tâm","cart"=>$cart,"count"=>$count,"reader"=>$reader,"recommend_book"=>$recommend_book]);
    }

    public function addCart(Request $req){
        $id = $req->input("id");
        $name = $req->input("name");
        $image = $req->input("image");
        $author = $req->input("author");

        if(!Book::isBookExists($id)){
            $response = [
                "type"=>'failed',
                "message"=>"Lỗi không tìm thấy sách"
            ];
            return response()->json($response);
        }
        $username = Auth::guard("readers")->user();
        if($this->borrow_detail->countBorrowDetail($username->id)>5){
            $response = [
                "type"=>'failed',
                "message"=>"Bạn đang mượn 5 cuốn sách, không thể tiếp tục mượn thêm"
            ];
            return response()->json($response);
        }

        Cart::instance($username->username)->add(['id'=>$id,'name'=>$name,'qty'=>1,'price'=>0,'options'=>['image'=>$image,'author'=>$author]]);
        $response = self::viewCartContent($req);
        $response["type"]="success_cartadd";
        return response()->json($response);
    }

    public function viewCartContent(Request $req){
        if($req->ajax()){
            $cart = Cart::instance(Auth::guard("readers")->user()->username)->content();
            $count = count($cart);
            $view = view("layout.cart-content",["cart"=>$cart]);
            $response =[
                "view"=> (string)$view,
                "count"=> $count
            ];
            return $response;
        }
    }

    public function deleteCart(Request $request){
        $rowid = $request->input("rowid");
        try{
            Cart::instance(Auth::guard("readers")->user()->username)->remove($rowid);
            return response()->json("success");
        }catch (InvalidRowIDException $e){
            return response()->json([
                "failed"=>"Không thể hủy sách trong danh sách quan tâm"
            ]);
        }
    }

    public function acceptCartToDB(Request $req){
        $user = Auth::guard("readers")->user();
        $cart = Cart::instance($user->username)->content();
        $book_error ="";
        $count = count($cart);
        $borrowed_count = $this->borrow_detail->countBorrowDetail($user->id);
        if($count==0){
            return redirect("/");
        }
        try {
            DB::beginTransaction();
            DB::statement("ALTER TABLE borrow_detail AUTO_INCREMENT=1");

            if($borrowed_count + $count > 5){
                return redirect()->back()->with("accept_cart_failed","Bạn đã mượn ".$borrowed_count." sách. Bạn không được mượn quá 5 cuốn");
            }

            foreach ($cart as $item_cart) {
                $book_error = $item_cart->name;
                Borrow_detail::create([
                    "id_reader" => $user->id,
                    "id_book" => $item_cart->id,
                    "borrow_date" => NULL,
                    "return_date" => NULL,
                    "is_return" => 2,
                    "is_keep" => 1,
                    "expire_date" => Carbon::now()->addDays(7)->toDateTimeString()
                ]);
            }
            DB::commit();
            Cart::instance($user->username)->destroy();

            return view("cart-accept", ["title" => "Accept Success"]);
        }catch (\Exception $ex){
            $message= "Lỗi hệ thống, không thể đăng kí mượn sách. Xin hãy thử lại sau chốc lát.";
            if($ex->getCode()==23000){
                $message = "Sách <span style='color: #610008'>".$book_error."</span> đã được mượn, không thể mượn trùng sách";
            }
            return redirect()->back()->with("accept_cart_failed",$message);
        }
    }
}
