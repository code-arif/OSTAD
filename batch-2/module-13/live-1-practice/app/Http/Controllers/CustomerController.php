<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    // public function index(){
    //     return view('pages.customer-list');
    // }

    public function index(Request $request) {
        $perPage = $request->perPage ?? 5;
        $keyword = $request->keyword;

        $query = Customer::query();

        if ($keyword) {
            $query = $query->where('name', 'LIKE', '%' . $keyword . '%');
        }

        $customers = $query->orderByDesc('id')->paginate($perPage)->withQueryString();

        return view('pages.customer-list', ['customers' => $customers]);
    }




    public function show(Customer $customer){
        return $customer;
    }
}
