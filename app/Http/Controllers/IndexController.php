<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Page;
use App\Models\User;
use App\Models\LogUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function dashboard(){

         return view('admin.dashboard.index');
    }
    public function home($local='en'){

        // send_sms_smsir( '123456' , '09384762155' , 'sms_verifylogin');
         // dd('hi');

        // $blog_listpages=Page::where([ ['status','active'], ])->orderBy('id','desc')->get();

        // dd($blog_listpages);

         return view('index_template.home.index',compact( [  'local'] ));
    }
    public function aboutus(){
        // session()->put('direction', 'rtl');
         return view('index.aboutus');
    }

    public function contactus(){
        // session()->put('direction', 'rtl');
        // session(['app_locale' => 'en']);
         return view('index.contactus');
    }
    public function page_slug($local = 'en',$slug){
        // session()->put('direction', 'ltr');


        // if(session('direction')=='rtl'){
        //     session()->put('direction', 'rtl');
        //     session(['app_locale' => 'fa']);
        //     app()->setLocale('fa');
        // }else{

        // }

        $page = Page::where([ ['short_link',$slug], ['status','active']  ])->first();
        $allpages = Page::where([ ['short_link','<>',$slug], ['status','active']  ])->get();
        // dd($page);
         return view('index.page',  compact(['page' , 'allpages'  ]));
    }

    public function panel_login( Request $request ,  $lang  , $remember_token   )
    {
        $user = User::where([ ['remember_token',$remember_token], ])->first();
        $result = Auth::guard('user')->loginUsingId($user->id);
        create_visitors($request,'login');

        $log_user = LogUser::where([ ['ip',$request->ip()],['redirect',1],['created_at', '>=', Carbon::now()->subMinutes(3)] ])->orderBy('id','desc')->first();
        if($log_user){
            $back = $log_user->prev;
            $log_user->update([ 'redirect' => 0 , 'user_id'=>$user->id]);
        return redirect($back);
        }else{
        $request['user_id']=$user->id;
        return redirect()->route('panel.user',['lang'=>$lang , 'any'=>'dashboard' ]);
        }


    }

    public function panel_logout( Request $request ,  $lang  , $remember_token   )
    {
        // dd($request);
        $user = User::where([ ['remember_token',$remember_token], ])->first();
                create_visitors($request,'logout');


        if($user){  auth()->guard('user')->logout(); }
        // return redirect()->route('vuepanel',['lang'=>$lang , 'any'=>'auth/login' ]);
        return redirect()->route('index_home_page');
    }

    public function select_lang($lang_id  )
    {

        $locale = $lang_id;

        if($lang_id=='fa'){
            session()->put('direction', 'rtl');
        }else{
            session()->put('direction', 'ltr');
        } 

        session(['app_locale' => $lang_id]);
        app()->setLocale($lang_id);




    // Try to get the previous route name and parameters
    $previous = url()->previous();
    $currentRoute = app('router')->getRoutes()->match(Request::create($previous));

    $routeName = $currentRoute->getName();
    $routeParams = $currentRoute->parameters();

    $routeParams['local'] = $locale;

    // dd($routeParams);
    if ($routeName) {
        return redirect()->route($routeName, $routeParams);
    }

    // fallback if route not found
    return redirect("/$locale");


        // return redirect()->back();
    }
    public function index( Request $request ,$lang , $any=null)
    {


        // $segments = explode('/', $any);
        // $segments[0];

        if($lang=='fa'){
            session()->put('direction', 'rtl');
        }else{
            session()->put('direction', 'ltr');
        }


        session(['app_locale' => $lang]);
        app()->setLocale($lang);

        // return redirect()->back();

        // dd($segments[1]);

    // session()->put('locale', $segments[0]);
    // if(session()->has('locale')){
    //     app()->setLocale(session('locale'));
    // }
    // else{
    //     app()->setLocale(config('app.locale'));
    // }

    // session()->put('direction', 'rtl');


    return view('index.index_js');
    }

    public function panel_user( Request $request ,$lang , $any=null)
    {
        if($lang=='fa'){
            session()->put('direction', 'rtl');
        }else{
            session()->put('direction', 'ltr');
        }


        session(['app_locale' => $lang]);
        app()->setLocale($lang);

    return view('index.panel_user');
    }

}
