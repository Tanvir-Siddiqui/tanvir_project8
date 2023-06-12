<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use Cart;
use Session;

class CheckoutController extends Controller
{
    public $customer, $order , $orderDetail, $product;
    public function index()
    {
        return view('website.checkout.index');
    }

    public function newOrder(Request $request)
    {

        if (Session::get('customer_id'))
        {
            $this->customer = Customer::find(Session::get('customer_id'));
            $this->validate($request, [
                'delivery_address'  => 'required',
            ],[
                'delivery_address.required' => 'Please enter your present address',
            ]);
        }

        else
        {
            $this->validate($request, [
                'name'              => 'required',
                'email'             => 'required|unique:customers,email',
                'mobile'            => 'required|unique:customers,mobile',
                'delivery_address'  => 'required',
            ],[
                'name.required' => 'Please enter your name first',
                'delivery_address.required' => 'Please enter your present address',
            ]);

            //Customer
            $this->customer = Customer::newCustomer($request);
            Session::put('customer_id', $this->customer->id);
            Session::put('customer_name', $this->customer->name);
        }
        //Order
        $this->order = Order::newOrder($request, $this->customer->id);

        //Order-Detail
        $this->orderDetail = OrderDetail::newOrderDetail($this->order->id);


        return redirect('/complete-order')->with('message', 'Congratulation... Your order post successfully. Please wait we will contact you soon.');
    }

    public function completeOrder()
    {
        return view('website.checkout.complete-order');
    }
}
