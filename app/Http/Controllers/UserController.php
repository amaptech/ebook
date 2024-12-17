<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;
use App\Models\Books;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function place_order(Request $request , $id){
        $order = new Orders();
        $book = Books::find($id);

        $order->bookid = $id;
        $order->username = Auth::user()->name;
        $order->bookname = $book->bookname;
        $order->bookimg = $book->image;
        $order->bookfile = $book->file;
        $order->bookauthor = $book->author;
        $order->bookprice = $book->type;
        $order->status = "Pending";
        $order->save();
        return redirect()->back();
    }

    public function cancel_req($id){
        $order = Orders::find($id);
        $order->status = "Cancel";
        $order->save();
        return redirect()->back();
    }
}
