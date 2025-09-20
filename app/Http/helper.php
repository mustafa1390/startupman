<?php

use Morilog\Jalali\Jalalian;
use App\Models\Authentication;
use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;

if(!function_exists('isActive'))
{
    function isActive($key , $activeClassName = 'active')
    {
        if (is_array($key))
        {
            return in_array(Route::currentRouteName() , $key) ? $activeClassName : '';
        }
        return Route::currentRouteName() == $key ? $activeClassName : '';
    }
}

if(!function_exists('isMmActive'))
{
    function isMmActive($key , $activeClassName = 'mm-active')
    {
        if (is_array($key))
        {
            return in_array(Route::currentRouteName() , $key) ? $activeClassName : '';
        }
        return Route::currentRouteName() == $key ? $activeClassName : '';
    }
}


if(!function_exists('isShow'))
{
    function isShow($key , $showClassName = 'show')
    {
        if (is_array($key))
        {
            return in_array(Route::currentRouteName() , $key) ? $showClassName : '';
        }
        return Route::currentRouteName() == $key ? $showClassName : '';
    }
}

if(!function_exists('isMmShow'))
{
    function isMmShow($key , $showClassName = 'mm-show')
    {
        if (is_array($key))
        {
            return in_array(Route::currentRouteName() , $key) ? $showClassName : '';
        }
        return Route::currentRouteName() == $key ? $showClassName : '';
    }
}



if(!function_exists('isShow_m'))
{
    function isShow_m($key , $showClassName = 'here show menu-accordion')
    {
        if (is_array($key))
        {
            return in_array(Route::currentRouteName() , $key) ? $showClassName : '';
        }
        return Route::currentRouteName() == $key ? $showClassName : '';
    }
}






if(! function_exists('date_frmat_f1') ) {
    function date_frmat_f1($date,$dir)
    {


        if($dir=='rtl'){ return date_frmat_mnth($date); }
        if($dir=='ltr'){ return date_format($date, "D M j Y"); }


    }
}


 if(! function_exists('date_frmat_mnth') ) {
    function date_frmat_mnth($date)
    {
        $date = Jalalian::forge($date)->format('%A, %d %B %Y');
        return $date;

    }

}
//get date_frmat
if(! function_exists('date_frmats_en') ) {
    function date_frmats_en($date)
    {
        $date = $date->format("Y-m-d H:i:s");
        return $date;

    }

}

if(! function_exists('date_frmats') ) {
    function date_frmats($date)
    {
        $date = Jalalian::forge($date)->format('Y/m/d ساعت H:i:s a');
        return $date;

    }

}

if(! function_exists('date_frmat') ) {
    function date_frmat($date)
    {
        $date = Jalalian::forge($date)->format('Y/m/d ساعت H:i a');
        return $date;

    }

}


 if(! function_exists('date_frmat_ymd') ) {
    function date_frmat_ymd($date)
    {
        $date = Jalalian::forge($date)->format('Y/m/d');
        return $date;

    }

}


 if(! function_exists('check_national_code') ) {
    function check_national_code($value)
    {

        $a =0;
        if(!preg_match('/^[0-9]{10}$/',$value)) {
            $a =  0;
        }

        for($i=0;$i<10;$i++)
            if(preg_match('/^'.$i.'{10}$/',$value)) {
                $a =  0;
            }

        for($i=0,$sum=0;$i<9;$i++)
            $sum+=((10-$i)*intval(substr($value, $i,1)));
            $ret=$sum%11;
            $parity=intval(substr($value, 9,1));
            if(($ret<2 && $ret==$parity) || ($ret>=2 && $ret==11-$parity)) {
                $a =  1;
            }

        return $a;

    }

}


if(! function_exists('count_auth') ) {
    function count_auth($user , $authentication)
    {
        if($authentication){

        }else{
             Authentication::create([ 'user_id' =>$user->id , 'email' =>$user->email ,
            'tell' => $user->tell   ]);
        }
        $authentication=  $user->authentication;
        return $authentication;
    }

}





if(! function_exists('validate_empty') ) {
    function validate_empty( $authentication , $name  )
    {

       // dd($authentication);
        // $random = Str::random(5);

        $random =  random_int(99999,999999);


        if($name=='email'){
            $quer= $authentication->user->email;
            $authentication->update([ 'email_code_verify' => $random ]);
            Alert::success('با موفقیت ارسال شد', 'کد وریفای با موفقیت به ایمیل شما ارسال شد');
        }


        if($name=='tell'){
            $quer= $authentication->user->tell;
            $authentication->update([ 'tell_code_verify' => $random ]);
            Alert::success('با موفقیت ارسال شد', 'کد وریفای با موفقیت به شماره همراه شما ارسال شد');
        }


        if($name=='tells'){
            $quer= $authentication->user->tells;
            $authentication->update([ 'tells_code_verify' => $random ]);
            Alert::success('با موفقیت ارسال شد', 'کد وریفای با موفقیت به تلفن ثابت شما ارسال شد');
        }



        if($quer!=""){

        }else{



            if($name=='email'){
                Alert::error('ایمیل کاربر نمی تواند خالی باشد      ', '  ایمیل کاربر انتخاب نشده است      ');  }

            if($name=='tell'){
                Alert::error('شماره همراه کاربر نمی تواند خالی باشد      ', '  شماره همراه کاربر انتخاب نشده است      '); }

            if($name=='tells'){
                Alert::error('شماره تلفن ثابت نمی تواند خالی باشد      ', '  شماره تلفن ثابت انتخاب نشده است      '); }

            return back();

        }



    }
}




