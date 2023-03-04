<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class BasketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        $cartItems = Basket::latest()->get();
        return view('admin.administrator.cart')->with('cartItems', $cartItems);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    public function getItems()
    {
        $cartItems = Basket::latest()->get();
        return json_encode($cartItems);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $product = DB::select('SELECT * FROM products WHERE id='.$request->productId);
        Basket::create([
            'user_id'=>auth()->user()->id,
            'course_name'=>$product[0]->name,
            'cost'=>$product[0]->price,
            'quantity'=>1
        ]);
        return redirect(route('basket.index'))->with('success',"The course has been added to the cart");
    }

    /**
     * Display the specified resource.
     */
    public function show(Basket $basket): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Basket $basket): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Basket $basket): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Basket $basket): RedirectResponse
    {
        DB::statement("DELETE FROM baskets WHERE id=".$basket->id);
        return redirect(route('basket.index'))->with('success', "The course has been deleted");
    }
}
