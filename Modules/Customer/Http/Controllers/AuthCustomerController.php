<?php

namespace Modules\Customer\Http\Controllers;


use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Modules\Admin\Http\Requests\AdminVerify;
use Modules\Customer\Entities\Customer;
use Modules\Customer\Http\Requests\CustomerRequest;
use Modules\Customer\Http\Requests\CustomerVerifyRequest;


class AuthCustomerController extends Controller
{
    public function loginPage()
    {
        return view('customerpanel::Auth.login');
    }

    public function login(CustomerRequest $request) {

        $customer = Customer::firstOrCreate(
            ['mobile' => $request->mobile],
            ['mobile' => $request->mobile,'username' => $request->username]);

        $customer->profile()->delete();
        $customer->profile()->create([
            'mobile' => $request->mobile,
            'username' => $request->username
        ]);


        $rand = rand(5555,9999);
        $mobile = $request->mobile;

        $customer->otps()->create(['code' => $rand]);

        return view('customerpanel::Auth.verify',compact('rand','mobile'));

    }

    public function verification()
    {
        return view('customerpanel::Auth.verify');   //verify page
    }


    public function verify(CustomerVerifyRequest $request){

        $code = $request->code;

        $customer = Customer::where('mobile',$request->mobile)->whereHas('otps',function ($q) use ($code) {
            $q->where('code',$code);
        })->first();

        if($customer == null){
            Session::flash('error','wrong code');
            return redirect()->back();
        }

        $mobile = $customer->mobile;
        $username = $customer->username;

        $user = Auth::guard('customer')->loginUsingId($customer->id);


        return redirect()->route('site.')->with('username' , $username)->with('mobile' , $mobile);
//        return view('site::site.index' , compact('customer'));

    }


    public function logout()
    {
        Auth::guard('customer')->logout();
        return redirect()->route('Auth.customer.loginPage');
    }

}
