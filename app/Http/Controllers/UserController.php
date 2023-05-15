<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Models\User;
=======
use App\Models\usertable;
use Illuminate\Support\Facades\Auth;
>>>>>>> 19c0b42274c60e3559b8a6b0152ab3530f273849
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('index');
    }


    public function createNewUser()
    {
        return view('create');
    }

<<<<<<< HEAD
    public function login(Request $request)
    {

=======
    public function login(Request $request){
        
>>>>>>> 19c0b42274c60e3559b8a6b0152ab3530f273849
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $isLogin = Auth::attempt($validated);

<<<<<<< HEAD
        if ($isLogin) {
            // $isLogin->getRoles->role
            return redirect()->intended('dashboard');
        } else {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->onlyInput('email');
        }
=======
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
>>>>>>> 19c0b42274c60e3559b8a6b0152ab3530f273849
    }


    public function store(LoginRequest $request)
    {
<<<<<<< HEAD
        $userdata = new user;
=======
        $userdata = new User;
>>>>>>> 19c0b42274c60e3559b8a6b0152ab3530f273849
        $userdata->name = $request->Username;
        $userdata->email = $request->Email;
        $userdata->password = Hash::make($request->Password);
        $userdata->phone = $request->Phone;
        $userdata->status = $request->Status;
        $userdata->save();
        // $message = "registered successfuly";
        // $message = session::flash('message', 'This is a message!');
        // session()->flash('message', 'Post successfully updated.');
        // return view('index')->with(['message' => $message]);
        return view('index')->with(session()->flash('message', 'Registered successfuly.'));
    }
    public function dashboard()
    {

        return view('dashboard');
    }
}
