<?php

namespace Modules\Admin\Http\Controllers;



use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Modules\Admin\Entities\Admin;
use Modules\Admin\Http\Requests\AdminRequest;
use Modules\Admin\Http\Requests\AdminVerify;



class AuthAdminController extends Controller
{
    public function loginPage()
    {
        return view('adminpanel::Auth.login');
    }

    public function login(AdminRequest $request) {

        $admin = Admin::firstOrCreate(
            ['mobile' => $request->mobile],
            ['mobile' => $request->mobile,'username' => $request->username]);

        $admin->profile()->delete();
        $admin->profile()->create([
            'mobile' => $request->mobile,
            'username' => $request->username
        ]);


        $rand = rand(5555,9999);
        $mobile = $request->mobile;

        $admin->otps()->create(['code' => $rand]);

        return view('adminpanel::Auth.verify',compact('rand','mobile'));

    }

    public function verification()
    {
        return view('adminpanel::Auth.verify');
    }//verify page


    public function verify(AdminVerify $request){

        $code = $request->code;

        $admin = Admin::where('mobile',$request->mobile)->whereHas('otps',function ($q) use ($code) {
            $q->where('code',$code);
        })->first();

        if($admin == null){
            Session::flash('error','wrong code');
            return redirect()->back();
        }


        $user = Auth::guard('admin')->loginUsingId($admin->id);


        return view('dashboard::Dashboard.index');


    }


    public function logout()
    {
        Auth::guard('Admin')->logout();
        return redirect()->route('Auth.teacher.loginPage');
    }

}
