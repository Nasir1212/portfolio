<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage; // ✅ Add this

use App\Models\PaymentMethod;
use Illuminate\Http\Request;

class PaymentMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $methods = PaymentMethod::latest()->get();
        return view('pages.admin.payment-methods', compact('methods'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:png,jpg,jpeg,svg|max:2048',
            'var'  => 'nullable|string',
        ]);

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('payment-methods', 'public');
        }

        PaymentMethod::create($data);

        return redirect()->back()->with('success', 'Payment method added.');
    }

    /**
     * Display the specified resource.
     */
    public function show(PaymentMethod $paymentMethod)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PaymentMethod $paymentMethod)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PaymentMethod $paymentMethod)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:png,jpg,jpeg,svg|max:2048',
            'var'  => 'nullable|string',
        ]);

        if ($request->hasFile('logo')) {
            if ($paymentMethod->logo && Storage::disk('public')->exists($paymentMethod->logo)) {
                Storage::disk('public')->delete($paymentMethod->logo);
            }
            $data['logo'] = $request->file('logo')->store('payment-methods', 'public');
        }

        $paymentMethod->update($data);

        return redirect()->back()->with('success', 'Payment method updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PaymentMethod $paymentMethod)
    {
        if ($paymentMethod->logo && Storage::disk('public')->exists($paymentMethod->logo)) {
            Storage::disk('public')->delete($paymentMethod->logo);
        }

        $paymentMethod->delete();

        return redirect()->back()->with('success', 'Payment method deleted.');
    }
}
