<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::latest()->get();
        return view('pages.admin.order', compact('orders'));
    }
    public function show(Order $order)
    {
        return view('pages.admin.invoice', compact('order'));
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'service' => 'required|string|max:255',
            'price' => 'required|string|max:255',
            'essential_file' => 'nullable|file|max:2048',
            'details' => 'required|string',
        ]);

        if ($request->hasFile('essential_file')) {
            $data['essential_file'] = $request->file('essential_file')->store('essential_files', 'public');
        }

        Order::create($data);

        return redirect()->route('admin.orders.index')->with('success', 'Order created successfully.');
    }

    public function update(Request $request, Order $order)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'service' => 'required|string|max:255',
            'price' => 'required|string|max:255',
            'essential_file' => 'nullable|file|max:2048',
            'details' => 'required|string',
        ]);

        if ($request->hasFile('essential_file')) {
            if ($order->essential_file && \Storage::disk('public')->exists($order->essential_file)) {
                \Storage::disk('public')->delete($order->essential_file);
            }
            $data['essential_file'] = $request->file('essential_file')->store('essential_files', 'public');
        }

        $order->update($data);

        return redirect()->route('admin.orders.index')->with('success', 'Order updated successfully.');
    }

    public function destroy(Order $order)
    {
        if ($order->essential_file && \Storage::disk('public')->exists($order->essential_file)) {
            \Storage::disk('public')->delete($order->essential_file);
        }

        $order->delete();

        return redirect()->back()->with('success', 'Order deleted successfully.');
    }
}
