<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Http\Requests\UserStoreRequest;

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
        return view('show-database');
    }

    public function store(UserStoreRequest $request)
    {
        //handles the data

        // return it to whole data page
        return view('show-database');
    }

}
