<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Session;

class CustomerController extends Controller
{

    public function index()
    {
        return view('admin.customer.index', ['customers' => Customer::orderBy('id','desc')->get()]);
    }

    public function delete($id)
    {
        Customer::deleteCustomer($id);
        return redirect('/customer-manage')->with('message','Customer Info Deleted Successfully');
    }

}
