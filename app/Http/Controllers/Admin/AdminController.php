<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{


    public function dashboard()
    {

        // dd('welcome');

        // session()->put('direction', 'rtl');

        // $user = User::where([ ['id','<>',0], ])->count();
       return view('admin.index');
    }


    public function admindemo()
    {
       // return view('admin.dashboard');
    //    return view('admin.index');
    }
    public function demoindex()
    {
       return view('admin.index');
    }

    public function index_admin()
    {
        $users=Admin::orderBy('id','desc')->get();
return view('admin.admin.index' , compact(['users'  ]));
    }

    public function create()
    {
        return view('admin.admin.create' );
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users,username,$request->username',
            'email' => 'required|unique:users,email,$request->email',
            'password' => 'required| min:4 |confirmed',
            'password_confirmation' => 'required| min:4'
        ]);


        Admin::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'image' => ' ',
            'address' => ' ',
            'tell' => ' ',
            'password' => Hash::make($request->password) ,
        ]);


    Flash_Themtfy("success",'باموفقیت ویرایش شد','اطلاعات با موفقیت ویرایش شد');
// Alert::success('با موفقیت ثبت شد', 'اطلاعات جدید با موفقیت ویرایش شد');
        return redirect()->route('admin.admin.index');

    }

    public function edit( Admin $admin , $tab_active=Null  )
    {


        return view('admin.admin.edit' , compact([ 'admin'  , 'tab_active'  ]) );
    }

    public function update(Request $request, Admin $admin)
    {
// dd($admin);
/*
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'emails' => [new Uniqemail],
            'tell' => 'required',
        ]); */
/*
        $request->validate([
            'username' => Rule::unique('users')->where(function ($query) {
                return $query->where('id', 3) ;
            }),
        ]); */

        return secret_user($request , $admin , 'update'  , 'admins' );


    }

    public function secret(Request $request, Admin $admin)
    {
        return secret_user($request , $admin , 'secret'  , 'admins'  );


    }

    public function destroy($id , Request $request)
    {

        User::destroy($request->id);
Alert::info('با موفقیت حذف شد', 'کاربر با موفقیت حذف شد');
return back();    }




public function status(Request $request , $id  , $tab_active=Null ){
$status=Change_status($id,'users');
return redirect()->route('admin.user.edit',[ $id , $tab_active ]);
}


}
