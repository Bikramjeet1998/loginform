<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\usertable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    public function login(Request $request){
        
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $isLogin = Auth::attempt($validated);

        if($isLogin){

            $user = Auth::user();

            if($user->role_id === 1 ){
                    // redirect to admin
                    //admin/dashboard
            }else{
                // redirect to user
                //user.dashboard
            }
            dd();
            //redirect where you want to go after login
        }


        return back()->withErrors([
            'error' => "Credentials not match"
        ]);
    }


    public function store(LoginRequest $request)
    {
        $userdata = new User;
        $userdata->name = $request->Username;
        $userdata->email = $request->Email;
        $userdata->password = Hash::make($request->Password);
        $userdata->phone = $request->Phone;
        $userdata->status = $request->Status;
        $userdata->save();
        return view('index');
    }
}
