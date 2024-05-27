<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function getData(){
        $invoice = Invoice::limit(5)->get();
        return $invoice;
    }

    public function invoice($id){
        $invoice = Invoice::findOrFail($id);
        return $invoice->client;
    }
}
