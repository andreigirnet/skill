<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Stripe\Invoice;
use Stripe\Stripe;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        return view('admin.administrator.orders');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        Order::create([
            ""
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order): RedirectResponse
    {
        //
    }
    //Download invoice for the order
    public function download($id)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));
        $order = Order::find($id);

        // Get the invoice ID for the order
        $invoiceId = $order->invoice_id;

        // Download the invoice PDF from Stripe
        $pdf = Invoice::retrieve($invoiceId);
        dd($pdf);
        $filename = "invoice-{$order->id}.pdf";

        // Save the invoice PDF to the storage/app/invoices directory
        Storage::put("invoices/{$filename}", $pdf);

        // Download the invoice PDF
        return Storage::download("invoices/{$filename}");
    }
}
