<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InvoiceController extends Controller
{
    public function download($id){
        $order = Order::find($id);
        $user  = DB::select("SELECT * FROM users WHERE id=". $order->user_id);
        $data  = ['order' => $order->toArray(),'user' => $user];
        $pdf   = Pdf::loadView('admin.administrator.invoice', $data);

        return $pdf->download('invoice.pdf');
    }
}
