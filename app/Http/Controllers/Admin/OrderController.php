<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use Barryvdh\DomPDF\Facade\Pdf; // make sure it's aliased in config/app.php

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
    // public function store(Request $request)
    // {
    //     $data = $request->validate([
    //         'name' => 'required|string|max:255',
    //         'phone' => 'required|string|max:255',
    //         'email' => 'nullable|email|max:255',
    //         'service' => 'required|string|max:255',
    //         'price' => 'required|string|max:255',
    //         'essential_file' => 'nullable|file|max:2048',
    //         'details' => 'nullable|string',
    //         'address' => 'nullable|string',
    //         'payment_type' => 'required|string',
    //         'product_id' => 'nullable|string',
    //         'order_id' => 'nullable|string',
    //     ]);

    //     if ($request->hasFile('essential_file')) {
    //         $data['essential_file'] = $request->file('essential_file')->store('essential_files', 'public');
    //     }

    //     Order::create($data);

    //     return redirect()->back()->with('success', 'Order created successfully.');
    // }

    public function store(Request $request)
{
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'phone' => 'required|string|max:255',
        'email' => 'nullable|email|max:255',
        'service' => 'required|string|max:255',
        'price' => 'required|string|max:255',
        'essential_file' => 'nullable|file',
        'details' => 'nullable|string',
        'address' => 'nullable|string',
        'payment_type' => 'required|string',
        'product_id' => 'nullable|string',
        // Remove 'order_id' from validation, since you'll generate it
    ]);

    // 🔓 Decrypt product_id if present
    if ($request->filled('product_id')) {
        try {
            $data['product_id'] = Crypt::decrypt($request->input('product_id'));
        } catch (\Illuminate\Contracts\Encryption\DecryptException $e) {
            return redirect()->back()->with(['error' => 'Invalid product ID.']);
        }
    }

    // 📦 Handle file upload
    if ($request->hasFile('essential_file')) {
        $data['essential_file'] = $request->file('essential_file')->store('essential_files', 'public');
    }

    // 🔢 Generate unique 6-digit order ID
    do {
        $data['order_id'] = random_int(100000, 999999);
    } while (Order::where('order_id', $data['order_id'])->exists());

    // 📝 Store the order
  
    $order =  Order::create($data);
    $pdf = Pdf::loadView('pages.admin.invoice', compact('order'));

    // Return PDF as download response
    return $pdf->download("Invoice-{$order->order_id}.pdf");
    return redirect()->back()->with('success', 'Order created successfully.');
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
            'payment_type' => 'required|string',
            'address' => 'required|string',
        ]);

        if ($request->hasFile('essential_file')) {
            if ($order->essential_file && \Storage::disk('public')->exists($order->essential_file)) {
                \Storage::disk('public')->delete($order->essential_file);
            }
            $data['essential_file'] = $request->file('essential_file')->store('essential_files', 'public');
        }

        $order->update($data);

        return redirect()->back()->with('success', 'Order updated successfully.');
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
