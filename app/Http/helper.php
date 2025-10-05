<?php

use App\Models\LogUser;
use App\Models\Role\Role;
use Illuminate\Support\Str;
use Morilog\Jalali\Jalalian;
use App\Models\Authentication;
use App\Models\Role\Permission;
use App\Models\Role\PermissionRole;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\Role\PermissionAccesse;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Notification\NotificationList;
use App\Models\Notification\NotificationType;
use App\Models\Notification\NotificationService;

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
            $random = '123456';
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








if(! function_exists('update_model_v2') ) {
    function update_model_v2($model)
    {



        if($model == 'permissions'){


            $updateorinsert = Permission::updateOrCreate([
                'link'   => 'management' ,
            ],[
                'link'   => 'management' ,  'name'   => 'مدیریت سایت' ,
            ]);
            permission_accesses($updateorinsert);
            $updateorinsert = Permission::updateOrCreate([
                'link'   => 'content' ,
            ],[
                'link'   => 'content' ,  'name'   => 'مدیریت محتوا' ,
            ]);
            permission_accesses($updateorinsert);
            $updateorinsert = Permission::updateOrCreate([
                'link'   => 'blogi' ,
            ],[
                'link'   => 'blogi' ,  'name'   => 'مدیریت بلاگ' ,
            ]);
            permission_accesses($updateorinsert);

            $updateorinsert = Permission::updateOrCreate([
                'link'   => 'mng_users' ,
            ],[
                'link'   => 'mng_users' ,  'name'   => 'مدیریت کاربران' ,
            ]);
            permission_accesses($updateorinsert);

            $updateorinsert = Permission::updateOrCreate([
                'link'   => 'finical' ,
            ],[
                'link'   => 'finical' ,  'name'   => 'مدیریت تراکنش ها' ,
            ]);
            permission_accesses($updateorinsert);

            $updateorinsert = Permission::updateOrCreate([
                'link'   => 'support' ,
            ],[
                'link'   => 'support' ,  'name'   => ' مدیریت تیکتینگ ها' ,
            ]);
            permission_accesses($updateorinsert);

            $updateorinsert = Permission::updateOrCreate([
                'link'   => 'tagi' ,
            ],[
                'link'   => 'tagi' ,  'name'   => ' مدیریت تگ ها' ,
            ]);
            permission_accesses($updateorinsert);

            $updateorinsert = Permission::updateOrCreate([
                'link'   => 'amar' ,
            ],[
                'link'   => 'amar' ,  'name'   => ' مدیریت آمار' ,
            ]);
            permission_accesses($updateorinsert);

        }


        if($model == 'roles'){

            $updateorinsert = Role::updateOrCreate([
                'link'   => 'superadmin' ,
            ],[
                'link'   => 'superadmin' ,  'name'   => '  سوپرادمین' ,
            ]);

            $updateorinsert = Role::updateOrCreate([
                'link'   => 'mngcontent' ,
            ],[
                'link'   => 'mngcontent' ,  'name'   => 'نویسنده محتوا' ,
            ]);
            $updateorinsert = Role::updateOrCreate([
                'link'   => 'mngblog' ,
            ],[
                'link'   => 'mngblog' ,  'name'   => 'نویسنده بلاگ' ,
            ]);
            $updateorinsert = Role::updateOrCreate([
                'link'   => 'mng_admins' ,
            ],[
                'link'   => 'mng_admins' ,  'name'   => 'مدیرکل سایت' ,
            ]);

        }


        if($model == 'permission_roles'){
            $updateorinsert = PermissionRole::updateOrCreate([
                'role_id'   => '1' ,  'permission_id'   => '1'
            ],[
                'role_id'   => '1' ,  'permission_id'   => '1' ,'status'   => 'active' ,
            ]);
            $updateorinsert = PermissionRole::updateOrCreate([
                'role_id'   => '1' ,  'permission_id'   => '2'
            ],[
                'role_id'   => '1' ,  'permission_id'   => '2' ,'status'   => 'active' ,
            ]);
            $updateorinsert = PermissionRole::updateOrCreate([
                'role_id'   => '1' ,  'permission_id'   => '3'
            ],[
                'role_id'   => '1' ,  'permission_id'   => '3' ,'status'   => 'active' ,
            ]);

        }




        if($model == 'notification_services'){

            $updateorinsert = NotificationService::updateOrCreate([
                'link'   => 'sms' ,
            ],[
                'link'   => 'sms' ,
                'name'   => 'اسمس' ,
            ]);
            $updateorinsert = NotificationService::updateOrCreate([
                'link'   => 'email' ,
            ],[
                'link'   => 'email' ,
                'name'   => 'ایمیل' ,
            ]);
            $updateorinsert = NotificationService::updateOrCreate([
                'link'   => 'notification' ,
            ],[
                'link'   => 'notification' ,
                'name'   => 'نوتیفیکشن' ,
            ]);

        }


        if($model == 'notification_types'){

$updateorinsert = NotificationType::updateOrCreate([
                'link'   => 'send_five_new' ,
            ],[
                'link'   => 'send_five_new' ,
                'name'   => 'لیست 5 خبر منتخب' ,
            ]);




        }

        if($model == 'notification_lists'){

            $notification_types=NotificationType::all();

            if($notification_types){
                foreach($notification_types as $notification_type){
            $updateorinsert = NotificationList::updateOrCreate([
                'link'   => $notification_type->link.'_sms' ,
            ],[
                'link'   => $notification_type->link.'_sms' ,
                'name'   => 'اسمس '.$notification_type->name ,
                'notification_service_id'   => '1' ,
                'notification_type_id'   => $notification_type->id ,
            ]);
            $updateorinsert = NotificationList::updateOrCreate([
                'link'   => $notification_type->link.'_email' ,
            ],[
                'link'   => $notification_type->link.'_email' ,
                'name'   => 'ایمیل '.$notification_type->name ,
                'notification_service_id'   => '2' ,
                'notification_type_id'   => $notification_type->id ,
            ]);
            $updateorinsert = NotificationList::updateOrCreate([
                'link'   => $notification_type->link.'_notification' ,
            ],[
                'link'   => $notification_type->link.'_notification' ,
                'name'   => 'نوتیفیکیشن '.$notification_type->name ,
                'notification_service_id'   => '3' ,
                'notification_type_id'   => $notification_type->id ,
            ]);
                }
            }
        }


    }
}


if(! function_exists('update_or_insert_permission_role') ) {
    function update_or_insert_permission_role($id)
    {


$permission_accesses = PermissionAccesse::all();

foreach($permission_accesses as $permission){
    $first=PermissionAccesse::find($permission->id);
    $update = PermissionRole::updateOrCreate([
        'role_id' => $id  ,
        // 'permission_id' => $first->permission_id,
        'permission_accesse_id' => $permission->id,
    ],[

        'role_id' => $id  ,
        'permission_id' => $first->permission_id,
        'permission_accesse_id' => $permission->id,
    ]);

}

    }
}


if(! function_exists('permission_accesses') ) {
    function permission_accesses($permission)
    {




        for ($x = 1; $x <= 5; $x++) {

            $coloumn_name = explode_ext($permission->name,'مدیریت','1');
            $coloumn_link = $permission->link.'_';

            // if($x=='1'){ $name =  'مدیریت'.$coloumn_name;  $link =  $coloumn_link.'mng';
            //         updateorinsert_permission_accesses($name,$link,$permission->id); }

            if($x=='1'){ $name =  'ثبت'.$coloumn_name;  $link =  $coloumn_link.'add';
                updateorinsert_permission_accesses($name,$link,$permission->id); }
            if($x=='2'){ $name =  'مشاهده'.$coloumn_name;  $link =  $coloumn_link.'index';
                updateorinsert_permission_accesses($name,$link,$permission->id); }
            if($x=='3'){ $name =  'ویرایش'.$coloumn_name;  $link =  $coloumn_link.'edit';
                updateorinsert_permission_accesses($name,$link,$permission->id); }
            if($x=='4'){ $name =  'حذف'.$coloumn_name;  $link =  $coloumn_link.'delete';
                updateorinsert_permission_accesses($name,$link,$permission->id); }
            if($x=='5'){ $name =  'تغییر وضعیت'.$coloumn_name;  $link =  $coloumn_link.'status';
                updateorinsert_permission_accesses($name,$link,$permission->id); }



        }

        // dd('hi');




    }
}


if(! function_exists('updateorinsert_permission_accesses') ) {
    function updateorinsert_permission_accesses($name,$link,$permission_id)
    {
        $updateorinsert = PermissionAccesse::updateOrCreate([
            'link'   => $link ,
        ],[
            'link'   => $link ,  'name'   => $name,  'permission_id'   => $permission_id,
        ]);

    }
}


if(! function_exists('update_permission_role_v1') ) {
    function update_permission_role_v1($data,$role_id)
    {

        PermissionRole::where([ ['role_id' , $role_id],   ])->update( ['status' => 'inactive'] );

        // dd($data);
if($data){
foreach($data as $item){
$status = 'inactive';
if($item){
    $status = 'active';
}
$update = PermissionRole::updateOrCreate([
    'role_id' => $role_id  ,
    'permission_accesse_id' => $item,
],[
    'status' => 'inactive'
]);

$update = PermissionRole::updateOrCreate([
    'role_id' => $role_id  ,
    'permission_accesse_id' => $item,
],[
    'status' => $status
]);


// echo $status." _ ".$item.'<br>';
            }
        }


        // dd('hi');

    }
}

if(! function_exists('Flash_Themtfy') ) {
    function Flash_Themtfy($variation,$MyThemtfyTitle,$MyThemtfyBody)
    {

        session()->flash("variation",$variation);
        session()->flash("MyThemtfyTitle",$MyThemtfyTitle);
        session()->flash("MyThemtfyBody",$MyThemtfyBody);
        // dd('hi');

    }
}



if(! function_exists('default_permission_access') ) {
    function default_permission_access($link)
    {

        $role = Role::where([ ['link','=',$link] ])->first();

        if($role){

            $permissions=$role->permissions;
            $permission_role=PermissionRole::where([ ['role_id',$role->id], ]);

            if(($role->link=='superadmin')||($role->link=='marketer')){
                $permission_role->update([ 'status' => 'inactive']);

            }
            if($link=='superadmin'){ $permission_role->update([ 'status' => 'active']); }

            if($link=='marketer'){

                $permission=Permission::where([ ['link','=','daily'] ])->first();
                $data[] = $permission->id;
                $permission=Permission::where([ ['link','=','marketering'] ])->first();
                $data[] = $permission->id;
                $permission=Permission::where([ ['link','=','message'] ])->first();
                $data[] = $permission->id;


                foreach($data as $item){
                    PermissionRole::where([ ['role_id',$role->id], ])->where([ ['permission_id' , $item ] ])->update([ 'status' => 'active']);
                }



            }

        }



    }
}




if(! function_exists('explode_ext') ) {
    function explode_ext($date,$repl,$i)
    {

        $collection = Str::of($date)->explode($repl);

        return $collection[$i];
    }
}


if(! function_exists('explode_url') ) {
    function explode_url($array)
    {

$route_cleander = Route::currentRouteName();
$collection = Str::of($route_cleander)->explode('.');
return $collection[$array];



    }
}

if(! function_exists('create_visitors') ) {
    function create_visitors($request,$any)
    {

        // dd($request);
        // $deleted = Visitor::where([ ['id','<>',0] ])->delete();
        $prev  = 0;

        // $device=   request()->header('User-Agent');
        // dd(URL::previous());
        // $ip = request()->ip();
        // $url = request()->url();
        // if(URL::previous()){
        //     $perv = URL::previous();
        // }



$url = $request->url();
$ip = $request->ip();
$prev = url()->previous();
$device = $_SERVER['HTTP_USER_AGENT'];

        $name = explode_url('0');
        $data['ip']  = $ip;
        $data['url']  = $url;
        $data['prev']  = $prev;
        $data['agents']  = $device;
        $data['name']  = $name;
        $data['act']  = $any;

$text = $prev;
$count = 0;
str_replace("/payment?form=", "#", $text, $count);
if($count > 0){ $data['redirect']  = 1; }


$user = Auth::guard('user')->user();

if($user){
     $data['user_id']  = $user->id;
}


    LogUser::create($data);

    }
}



if(! function_exists('update_data_user_auth') ) {
    function update_data_user_auth($user)
    {

        if(($user->email==null)&&($user->authentication->email==null)){}
        if(($user->email!=null)&&($user->authentication->email==null)){$user->authentication->update([ 'email'=>$user->email ]);}
        if(($user->email==null)&&($user->authentication->email!=null)){$user->update([ 'email'=>$user->authentication->email ]);}

        if(($user->tell==null)&&($user->authentication->tell==null)){}
        if(($user->tell!=null)&&($user->authentication->tell==null)){$user->authentication->update([ 'tell'=>$user->tell ]);}
        if(($user->tell==null)&&($user->authentication->tell!=null)){$user->update([ 'tell'=>$user->authentication->tell ]);}

    }
}




if(! function_exists('number_step_auth') ) {
    function number_step_auth( $auth_id )
    {

        // $auth = Authentication::where([ ['user_id',$auth_id], ])->first();
        $auth = Authentication::find($auth_id);

        $sum_step = '0';
        if($auth->tell_verify=='active'){ $sum_step = '1';   }
        if(($auth->tell_verify=='active')&&($auth->email_verify=='active')){ $sum_step = '2';  }
        if(($auth->tell_verify=='active')&&($auth->email_verify=='active')&&($auth->cardmelli_verify=='active')){ $sum_step = '3'; }
        if(($auth->tell_verify=='active')&&($auth->email_verify=='active')&&($auth->cardmelli_verify=='active')&&($auth->selfi_verify=='active')){ $sum_step = '4'; }
        if(($auth->tell_verify=='active')&&($auth->email_verify=='active')&&($auth->cardmelli_verify=='active')&&($auth->selfi_verify=='active')&&($auth->document_verify=='active')){ $sum_step = '5'; }

        return $sum_step;


    }
}

