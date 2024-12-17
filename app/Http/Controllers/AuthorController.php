<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\blog;

class AuthorController extends Controller
{
    public function front_scr(){
        return view('author.index');
    }

    public function add_book(){
        return view('author.add_book');
    }

    public function upload_book(Request $request){
        $book = new Books();

        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('bookimg' , $imagename);
        $book->image = $imagename;

        $file = $request->file;
        $filename = time().'.'.$file->getClientOriginalExtension();
        $request->file->move('bookfile' , $filename);
        $book->file = $filename;


        $book->bookname = $request->name;
        $book->description = $request->description;
        $book->author = Auth::User()->name;
        $book->type = $request->type;
        $book->save();
        return redirect()->back();
    }

    public function all_book(){
        $book = Books::all();
        return view('author.all_book' , compact('book'));
    }

    public function delete_book($id){
        $book = Books::find($id)->delete();
        return redirect()->back();
    }

    public function add_blog(){
        return view('author.add_blog');
    }

    public function upload_blog(Request $request){
        $blog = new blog();

        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('blogimg' , $imagename);
        $blog->image = $imagename;



        $blog->blogtitle = $request->blogtitle;
        $blog->blogdescription = $request->blogdescription;
        $blog->author = Auth::User()->name;
        $blog->save();
        return redirect()->back();
    }
}
