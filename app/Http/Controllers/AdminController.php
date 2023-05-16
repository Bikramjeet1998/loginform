<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $isAdmin = Auth::guard('admin')->attempt($validated);
        if ($isAdmin) {
            // $user = Auth::user();
            return redirect()->route('admindashboard');
            // return view('adminDashboard');
        } else {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->onlyInput('email');
        }
        // Auth::guard('admin')->check();
        // Auth::guard('admin')->user()->name;
    }

    public  function index()
    {
        return view('Admin/index');
    }
    public function dashboard()
    {
        return view('adminDashboard');
        // return "welcome to dashboard";
    }
    public function createNewAdmin()
    {
        return view('Admin/createAdmin');
    }
    public function store(Request $request)
    {
        $userdata = new admin;
        $userdata->name = $request->Username;
        $userdata->email = $request->Email;
        $userdata->password = Hash::make($request->Password);
        $userdata->save();
        $message = "registered successfuly";
        return view('Admin/index')->with(['message' => $message]);
    }
}
