<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function customLogin(Request $request)
    {
        $request->validate(([
            'email' => 'required|email',
            'password' => 'required'
        ]));

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()
                ->intended('products.overview')
                ->withSuccess('Signed in');
        }

        return redirect('login')
            ->withSuccess('Login details ar not valid');
    }

    public function registration() 
    {
        return view('auth.registration');
    }

    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|min:8|max:255'
        ]);

        $data = $request->all();
        $check = $this->create($data);
        return redirect("dashboard")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function dashboard() 
    {
        if (Auth::check()()) {
            return view('products.overview');
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function signOut() 
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
