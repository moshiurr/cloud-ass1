<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Http\Requests\UserStoreRequest;
use Illuminate\Support\Facades\Redirect;

class IndexController extends Controller
{
    //
    public function index()
    {
        $books = Book::all();
        return view('index', compact(['books']));
    }

    public function showDatabase()
    {
        $users = User::join('books', 'books.book_id', 'users.book_id')->get();
        return view('show-database', compact(['users']));
    }

    public function store(UserStoreRequest $request)
    {
        try {
            //handles the data
            $newUser = User::create($request->validated());

            // return it to whole data page
            return Redirect::to('/');
        }catch (\Exception $e){
            // handles the error
            // duplicate email id
        }
    }

}
