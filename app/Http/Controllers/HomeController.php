<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::active()->latest()->get();
        return view('public.home', compact('products'));
    }

    public function checkout(Request $request)
    {
        $validated = $request->validate([
            'customer_name'    => 'required|string|max:255',
            'customer_phone'   => 'required|string|max:20',
            'customer_address' => 'required|string',
            'notes'            => 'nullable|string',
            'items'            => 'required|array|min:1',
            'items.*.id'       => 'required|exists:products,id',
            'items.*.qty'      => 'required|integer|min:1',
        ]);

        $total = 0;
        $orderItems = [];

        foreach ($validated['items'] as $item) {
            $product = Product::findOrFail($item['id']);
            $subtotal = $product->price * $item['qty'];
            $total += $subtotal;
            $orderItems[] = [
                'product_id'   => $product->id,
                'product_name' => $product->name,
                'price'        => $product->price,
                'quantity'     => $item['qty'],
            ];
        }

        $order = Order::create([
            'customer_name'    => $validated['customer_name'],
            'customer_phone'   => $validated['customer_phone'],
            'customer_address' => $validated['customer_address'],
            'notes'            => $validated['notes'] ?? null,
            'total_amount'     => $total,
            'status'           => 'pending',
        ]);

        foreach ($orderItems as $item) {
            $order->items()->create($item);
        }

        return response()->json([
            'success'  => true,
            'order_id' => $order->id,
            'message'  => 'Pesanan berhasil dikirim! Kami akan segera menghubungi Anda.',
        ]);
    }
}
