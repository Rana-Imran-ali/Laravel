<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $productCount = Product::count();
        $categoryCount = Category::count();
        $orderCount = Order::count();
        $userCount = User::where('role', 'user')->count();
        
        $recentOrders = Order::with('user')->latest()->take(10)->get();

        return view('admin.dashboard', compact(
            'productCount', 
            'categoryCount', 
            'orderCount', 
            'userCount',
            'recentOrders'
        ));
    }

    public function superAdminDashboard()
    {
        return $this->index(); // Share same dashboard logic for now
    }
}
