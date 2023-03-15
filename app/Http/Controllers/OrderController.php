<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
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
        $orders = DB::select("SELECT * FROM orders ORDER BY created_at DESC");
        return view('admin.administrator.orders')->with('orders',$orders);
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
    public function destroy($id): RedirectResponse
    {
        DB::statement("DELETE FROM orders WHERE id=".$id);
        return redirect(route('order.index'))->with('success','Order has been removed');
    }
}
