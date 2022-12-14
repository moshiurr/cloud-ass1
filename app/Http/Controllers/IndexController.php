<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\UserStoreRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }


    public function showDatabase()
    {
        try {
            $users = Contact::all();
            return view('show-database', compact(['users']));
        }catch (\Exception $exception){
            Log::error($exception->getMessage());
            dd("Database Connection failed. See the log file");
        }
    }

    public function store(UserStoreRequest $request)
    {
        try {
            //handles the data
            $newContact = Contact::create($request->validated());
            // return the success view
            return view('success', compact(['newContact']));
        }catch (\Exception $e){
            Log::error($e->getMessage());
            dd("Database Connection failed. See the log file");
        }
    }

}
