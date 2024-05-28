<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function getData(){
        // $invoice = Invoice::limit(5)->get();
        // $invoice = Invoice::where('paid','=',1)->get();
        // $invoice = Invoice::whereTotalPrice(850000)->get();
        // $invoice = Invoice::where('paid',1,)->where('total_price','<',80000)->get();
        $invoice = Invoice::where([
        ['paid', 1],
        ['total_price', '>', 80000] ])->get();
        return $invoice;
    }

    public function invoice($id){
        $invoice = Invoice::findOrFail($id);
        return $invoice->client;
    }
}
