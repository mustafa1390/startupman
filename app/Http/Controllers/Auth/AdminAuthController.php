<?php

namespace App\Http\Controllers\Auth;

use Validator;
use SoapClient;
use App\Models\User;
use App\Models\Admin;
use App\Http\Requests;
use App\Models\Setting;
use App\Models\Txtdese;
use App\Models\Role\Role;
use App\Models\SectionUser;
use Illuminate\Http\Request;
use App\Models\SectionPublic;
use App\Models\Eform\Currency;

use App\Models\Eform\PriceFee;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Session ;

class AdminAuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */


    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest', ['except' => 'logout']);
    }

    public function getLogin()
    {



        // Artisan::call('route:cache');
        // Artisan::call('config:cache');
        // Artisan::call('cache:clear');
        // Artisan::call('view:clear');
        // Artisan::call('optimize:clear');



        session()->put('direction', 'rtl');


  if (Auth::guard('admin')->user()) {
return redirect()->route('admin.dashboard');
        }

//     $admin = Admin::create([
//     'name' => '  مدیریت سایت' ,
//     'email'=> 'admin@gmail.com',
//     'password'=> Hash::make('123456'),
// ]);



// dd($admin);

//  install_done_first();


        // dd('hi');

        // $setting=Setting::find(1);

        return view('auth.admin.login');
        // return view('user2.dashboard');





    }

    /**
     * Show the application loginprocess.
     *
     * @return \Illuminate\Http\Response
     */
    public function postLogin(Request $request)
    {


        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            // 'g-recaptcha-response' => 'required|captcha'
        ]);

        // mytest


        if (auth()->guard('admin')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')]))
        {
            $user = auth()->guard('admin')->user();

            Session::put('success','You are Login successfully!!');
            return redirect()->route('admin.dashboard');

        } else {
            return back()->with('error','اطلاعات ورود متاسفانه اشتباه می باشد!');
        }

    }

    /**
     * Show the application logout.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        auth()->guard('admin')->logout();
        Session::flush();
        Session::put('success','You are logout successfully');
        return redirect(route('adminLogin'));
    }
}
