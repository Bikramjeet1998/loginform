<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use App\Models\User;
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
    public function login(Request $request)
    {

        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $isLogin = Auth::attempt($validated);

        if ($isLogin) {
            // $isLogin->getRoles->role
            $user = Auth::user();

            if ($user->role_id == 2) {
                return view('adminDashboard');
            }
            return redirect()->intended('dashboard');
        } else {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->onlyInput('email');
        }
    }


    public function store(LoginRequest $request)
    {
        $userdata = new user;
        $userdata->name = $request->Username;
        $userdata->email = $request->Email;
        $userdata->password = Hash::make($request->Password);
        $userdata->phone = $request->Phone;
        $userdata->status = $request->Status;
        $userdata->save();
        $message = "registered successfuly";
        return view('index')->with(['message' => $message]);
    }
    public function dashboard()
    {

        return view('dashboard');
    }
}
