<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function shop()
    {
        $products = \App\Models\Product::all();
        return view('shop', compact('products'));
    }

    public function why()
    {
        return view('why');
    }

    public function testimonial()
    {
        return view('testimonial');
    }

    public function contact()
    {
        return view('contact');
    }

    public function dashboard()
    {
        $user = Auth::user();
        $role = $user->role ?? 'user';

        if ($role === 'admin') {
            return redirect()->route('admin.dashboard');
        } elseif ($role === 'super_admin') {
            return redirect()->route('super_admin.dashboard');
        }
        
        return view('dashboard');
    }
}
