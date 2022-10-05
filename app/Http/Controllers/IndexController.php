<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\UserStoreRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class IndexController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }

    public function showDatabase()
    {
        $users = Contact::all();
        return view('show-database', compact(['users']));
    }

    public function store(UserStoreRequest $request)
    {
        try {
            //handles the data
            Contact::create($request->validated());
            // return it to whole data page
            return Redirect::to('/showDatabase');
        }catch (\Exception $e){
            // handles the error
        }
    }

}
