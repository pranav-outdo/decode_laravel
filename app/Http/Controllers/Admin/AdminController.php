<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    //
    public function index()
    {
        return redirect()->route('admin.integration.index');
        return view('admin.dashboard');
    }

    public function loginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        try {
            $credentials = ['email' => $request->email, 'password' => $request->password];

            if (!Auth::attempt($credentials)) {
                return redirect()->back()->withError("Invalid admin credentials.");
            }
            $user = User::find(Auth::user()->id);
            Auth::login($user);
            return redirect(route('admin.dashboard'));
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        }
    }

    public function logout(Request $request)
    {
        Session::flush();

        Auth::logout();

        return redirect(route('admin.login.show'));
    }
}
