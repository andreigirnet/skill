<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Basket;
use App\Models\Order;
use App\Models\Package;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Jackiedo\Cart\Cart;
use Stripe\Customer;
use Stripe\InvoiceItem;
use Stripe\Stripe;
use Stripe\Charge;
use Stripe\Invoice;


class CheckoutController extends Controller
{
    protected Cart $cart;

    public function __construct(Cart $cart)
    {
        $this->cart = $cart;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        $cartDetails = $this->cart->getDetails();
        return view('admin.administrator.checkout')->with('cartDetails',$cartDetails);
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
    public function store(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        $amoutToInt = round($request->cartTotal * 100, 0, PHP_ROUND_HALF_UP);

        try {
            $customer = Customer::create([
                'email'  => auth()->user()->email,
                'source' => $request->stripeToken,
            ]);

            $charge = Charge::create([
                'amount'      => $amoutToInt,
                'currency'    => 'eur', // set the currency to euro
                'description' => 'Payment from ' . auth()->user()->email . ' on the date ' . date("Y-m-d h:i:sa"),
                'customer'    => $customer->id
            ]);
            // Check if the charge was successful
            if ($charge->status === 'succeeded')
            {

                // Create an invoice for the charge
                InvoiceItem::create([
                    'customer' => $customer->id,
                    'amount'   => $amoutToInt,
                    'currency' => 'usd'
                ]);

                $invoice = Invoice::create([
                    'customer'     => $charge->customer,
                    'auto_advance' => true,
                ]);

                Order::create([
                    'user_id'     => auth()->user()->id,
                    'product_name'=> "Manual Handling",
                    'quantity'    => $request->cartQty,
                    'paid'        => $request->cartTotal,
                    'charge_id'   => $charge->id,
                    'invoice_id'  => $invoice->id,
                    'address'     => $request->address,
                    'city'        => $request->city,
                    'county'      => $request->county,
                    'country'     => $request->country,
                    'status'      => 'paid'
                ]);

                for ($i = 0; $i < $request->cartQty; $i++) {
                    $package = new Package();
                    $package->user_id = auth()->user()->id;
                    $package->course_name = "Manual Handling";
                    $package->status = "theory";
                    $package->save();
                }

                $this->cart->clearItems();

                return redirect(route('order.index'))->with('success', 'The payment has been submited successfully');
            } else
            {
                return redirect(route('error'));
            }
        }catch (\Stripe\Exception\CardException $e){

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        //
    }
}
