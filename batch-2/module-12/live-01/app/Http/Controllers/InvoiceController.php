<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\InvoiceItem;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function getData(){
        // $invoice = Invoice::limit(5)->get();
        // $invoice = Invoice::where('paid','=',1)->get();
        // $invoice = Invoice::whereTotalPrice(850000)->get();
        // $invoice = Invoice::where('paid',1,)->where('total_price','<',80000)->get();
        /*
        $invoice = Invoice::where([
        ['paid', 1],
        ['total_price', '>', 200] ])->get();
        */
        // $invoice = Invoice::where('paid',0)->sum('total_price');
        // return $invoice;



        //==================after relationship with invoiceItem model//
        // $invoice = InvoiceItem::with('invoice')->get();
        // $invoiceItem = $invoice->invoiceItem;
        // $invoice = Invoice::with('invoiceItem')->find(1);
        $invoiceItem = InvoiceItem::with('invoice')->find(1);
        return $invoiceItem;
    }

    public function invoice($id){
        $invoice = Invoice::findOrFail($id);
        return $invoice->client;
    }
}
