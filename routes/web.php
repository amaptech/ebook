<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Books;
use App\Models\blog;
use App\Models\Orders;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $book = Books::all();
    $blog = blog::all();
    $status = Orders::all();
    return view('users.index' , compact(['book' , 'blog' , 'status']));
});

Route::get('/add_author' , [AdminController::class , 'add_author']);
Route::get('/all_author' , [AdminController::class , 'all_author']);
Route::get('/all_request' , [AdminController::class , 'all_request']);
Route::get('/front_scr' , [AdminController::class , 'front_scr']);
Route::post('/upload_author' , [AdminController::class , 'upload_author']);
Route::get('/delete_author/{id}' , [AdminController::class , 'delete_author']);
Route::get('/edit_author/{id}' , [AdminController::class , 'edit_author']);
Route::get('/req_app/{id}' , [AdminController::class , 'req_app']);
Route::get('/req_can/{id}' , [AdminController::class , 'req_can']);
Route::post('/update_author/{id}' , [AdminController::class , 'update_author']);

Route::get('/add_book' , [AuthorController::class , 'add_book']);
Route::get('/all_book' , [AuthorController::class , 'all_book']);
Route::get('/front_scr' , [AuthorController::class , 'front_scr']);
Route::post('/upload_book' , [AuthorController::class , 'upload_book']);
Route::get('/delete_book/{id}' , [AuthorController::class , 'delete_book']);
Route::get('/add_blog' , [AuthorController::class , 'add_blog']);

Route::get('/place_order/{id}' , [UserController::class , 'place_order']);
Route::get('/cancel_req/{id}' , [UserController::class , 'cancel_req']);
Route::post('/upload_blog' , [AuthorController::class , 'upload_blog']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        $user = User::all();
        if(Auth::id()){
            if(Auth::User()->usertype == "0" ){
                $book = Books::all();
                $blog = blog::all();
                $status = Orders::all();
                return view('users.index' , compact(['book' , 'blog' , 'status']));
            }
            elseif(Auth::User()->usertype == "1"){
                $author = User::all();
                return view('author.index' , compact('author'));
            }
            else{
                return view('admin.index' , compact('user'));
            }
        }else{
            return redirect()->back();
        }
    })->name('dashboard');
});
