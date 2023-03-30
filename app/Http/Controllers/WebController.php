<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
        return view('web.index');
    }

    public function customerCheckLogin(){
        return view('web.customer-login');
    }
    public function customerPortal(){
        
        $customerdetails = Customer::withCount('visitDetails')->find(auth()->guard()->user()->customer_id);
        return view('web.customer-portal',compact('customerdetails'));
    }
    public function salons(){
        return view('web.salons');
    }
    public function treatemnts(){
        return view('web.treatment');
    }
    public function offers(){
        return view('web.offers');
    }
    public function appointment(){
        return view('web.appointment');
    }
    public function packages(){
        return view('web.packages');
    }
    public function careers(){
        return view('web.careers');
    }
    public function contacts(){
        return view('web.contact');
    }

}
