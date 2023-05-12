<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use App\Models\usertable;

class UserController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function create()
    {
        return view('create');
    }


    public function store(LoginRequest $request)
    {
        $userdata = new usertable;
        $userdata->name = $request->Username;
        $userdata->email = $request->Email;
        $userdata->password = $request->Password;
        $userdata->phone = $request->Phone;
        $userdata->status = $request->Status;
        $userdata->save();
        return view('index');
    }
}
