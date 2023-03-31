<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use App\Models\Carousalmodel;
use App\Models\Marqueemodel;
use App\Models\Cardmodel;
use App\Models\Treatmentmodel;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
        $data=Carousalmodel::all();
        $marq=Marqueemodel::all();
        // dd($marq[0]->textarea);
        return view('web.index',compact('data','marq'));
    }

    public function customerCheckLogin(){
        return view('web.customer-login');
    }
    public function customerPortal(){
        
        $customerdetails = Customer::withCount('visitDetails')->find(auth()->guard()->user()->customer_id);
        return view('web.customer-portal',compact('customerdetails'));
    }
    public function salons(){
        $data=Cardmodel::all();
        return view('web.salons',compact('data'));
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
