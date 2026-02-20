<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function checkout()
    {
        return view('checkout');
    }

    public function store(Request $request)
    {
        $request->validate([
            'rec_address' => 'required',
            'phone' => 'required',
        ]);

        $cart = session()->get('cart');
        if(!$cart) {
            return redirect()->back()->with('error', 'Cart is empty!');
        }

        $user = Auth::user();
        $total = 0;
        foreach($cart as $details) {
            $total += $details['price'] * $details['quantity'];
        }

        $order = Order::create([
            'user_id' => $user->id,
            'name' => $user->name,
            'rec_address' => $request->rec_address,
            'phone' => $request->phone,
            'status' => 'pending',
            'total_price' => $total,
        ]);

        foreach($cart as $id => $details) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $id,
                'quantity' => $details['quantity'],
                'price' => $details['price'],
            ]);
        }

        session()->forget('cart');

        return redirect()->route('orders.index')->with('success', 'Order placed successfully!');
    }

    public function index()
    {
        $orders = Order::where('user_id', Auth::id())->latest()->get();
        return view('orders.index', compact('orders'));
    }
}
