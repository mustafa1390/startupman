<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Role\Permission;
use App\Models\Role\PermissionAccesse;
use App\Models\Role\PermissionRole;
use App\Models\Role\Role;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class PermissionRoleController extends Controller
{



    public function create(){

        update_model_v2('permissions');
        update_model_v2('roles');
        // update_model_v2('permission_roles');

        $users=Admin::where([ ['id','<>',0], ])->orderBy('created_at', 'desc')->get();
        $roles=Role::orderBy('id', 'desc')->get();
        $permissions=Permission::orderBy('id', 'asc')->get();

        $permission_accesses=PermissionAccesse::orderBy('id', 'asc')->get();
        return view('admin.Role.permission.create' , compact([    'users' ,  'permissions' ,  'roles',  'permission_accesses'    ]));
      }

      public function storepermission(Request $request)
      {
           $request->validate([
              'name' => 'required',
          ]);
          $data = $request->all();
          $role = Role::create([ 'name' => $data['name']   ]);
          $permissions=Permission::orderBy('id', 'asc')->get();
          $permission_accesses=PermissionAccesse::orderBy('id', 'asc')->get();
          foreach($permission_accesses as $permission){
          $first=PermissionAccesse::find($permission->id);
          $permission_role = PermissionRole::create([ 'role_id' => $role->id , 'permission_id' => $first->permission_id , 'permission_accesse_id' => $permission->id  ]);
          }



          update_permission_role_v1($data['permission'] , $role->id);



    Flash_Themtfy("success",'باموفقیت ویرایش شد','اطلاعات با موفقیت ویرایش شد');
// Alert::success('با موفقیت ثبت شد', 'اطلاعات جدید با موفقیت ویرایش شد');
          return redirect()->route('admin.permission.index');
      }



      public function index(){
        $permissionroles = PermissionRole::where([ ['status' , '=' , 'active'], ])->get();

        $roles=Role::orderBy('id', 'desc')->get();
        $users=Admin::where([ ['id','<>',0], ])->orderBy('id', 'desc')->get();
        return view('admin.Role.permission.index' , compact(['roles' , 'permissionroles', 'users'  ]));
    }


    public function editpermission($id){


        $permission_roles = PermissionRole::where([ [ 'role_id' , '=' , $id ],
          [ 'permission_accesse_id' , '=' , null ] ,
          ])->delete();



        update_or_insert_permission_role($id);
        $role=Role::find($id);
        $permissions=Permission::orderBy('id', 'asc')->get();
        update_model_v2('index_role_permission',$id);

        default_permission_access($role->link);

        $permission_accesses = PermissionAccesse::orderBy('id', 'asc')->get();
        $permission_roles = PermissionRole::where([ ['role_id' , $id], ])->get();


        // dd($permission_accesses);

        return view('admin.Role.permission.edit' , compact(['permissions' ,  'role'  ,
         'permission_roles'   , 'permission_accesses'  ]));
        }




    public function indexadmin(){

        $permissionroles = PermissionRole::all();
        $roles = Role::all();
        $users= $user=User::type('admin',null)->orderBy('created_at')->get();
        return view('dashboard.admin.admins.index' , compact(['users' ,  'roles' ,  'permissionroles'  ]));
    }


    public function createadmin(){
        $roles=Role::orderBy('id', 'desc')->get();
        $permissions=Permission::orderBy('id', 'desc')->get();
        return view('dashboard.admin.admins.create' , compact([    'permissions' ,  'roles'  ]));
      }







    public function appointment($id)
    {
        update_or_insert_permission_role($id);
        $role=Role::find($id);
        $permissions=Permission::orderBy('id', 'asc')->get();

        update_model_v2('index_role_permission',$id);

        $permission_roles = PermissionRole::where([ ['role_id' , $id], ])->get();
        $users = Admin::where([ ['id' , '<>' , '0'] ])->orderBy('id', 'desc')->get();
        return view('admin.Role.permission.appointment' , compact(['permissions' ,  'role'  ,
        'permission_roles' , 'users'  ]));
    }

    public function appointment_put(Request $request, $id  ){

        $data = $request->all();
        $update = Admin::where([ ['id',$data['admin_id']] ])->update([ 'role_id' => $id ]);

        Alert::success('با موفقیت ثبت شد', 'نقش کاربری با موفقیت به مدیر انتخاب شده منتصب شد');
        return redirect()->route('admin.permission.index');



    }


    public function updatepermission(Request $request, $id  ){
        // dd($request);
        $request->validate([
            'name' => 'required',
        ]);
        $data = $request->all();
        $permission_role=PermissionRole::where([  ['role_id' , $id],  ])->get();
        $update = Role::where([ ['id',$id] ])->update([ 'name' => $data['name']]);
        update_permission_role_v1($data['permission'] , $id);

Alert::success('با موفقیت ویرایش شد', 'نقش کاربری با موفقیت ویرایش شد');
        return redirect()->back();

    }


    public function destroy($id , Request $request){


        $role=Role::find($id);
        if(($role->link=='superadmin')||($role->link=='marketer')){

       Alert::warning('حذف با مشکل مواجه شد', 'به دلیل اینکه نقش انتخابی جز نقشهای اصلی سامانه می باشد شما دسترسی به حذف این نقش را ندارید');
       return redirect()->route('dashboard.admin.permission.index');
        }

        $user = Admin::where([  ['role_id' , $id], ])->update( ['role_id' => null ] );

        PermissionRole::where([ [ 'role_id' , '=' , $id ] ])->delete();
        $destroy =  Role::destroy($id);

        $count = Role::where([ [ 'id' , '=' , $id ] ])->count();



        if($count==0){
            update_model_v2('permissions');
            update_model_v2('roles');
            // update_model_v2('permission_roles');
        }

        if($destroy){

       Alert::success('حذف با موفقیت انجام شد', 'نقش کاربری با موفقیت حذف شد و کاربران منتصب به این نقش بدون نقش هستند ، لطفا نسبت به انتصاب نقش به مدیران خود اقدام نمایید');
 return redirect()->back();
         }else{
            Alert::warning('حذف با مشکل مواجه شد', 'عملیلات حذف به دلیل منتصب بودن چندین نقش به چندین مدیر بامشکل مواجه شد');
 return redirect()->back();
        }
    }

    public function status(Request $request , $id){
        $status=Change_status($id,'values');
        return back();
    }


    public function duplicate($id){


        $data=array();
        $role_find = Role::find($id);
        $role = Role::create([ 'name' => 'کپی '.$role_find->name   ]);
        $permission_roles=PermissionRole::where([ ['role_id' , $id],    ])->orderBy('id', 'asc')->get();
        foreach($permission_roles as $permission){
        $first=PermissionAccesse::find($permission->permission_accesse_id);
        $permission_role = PermissionRole::create([ 'role_id' => $role->id , 'status' =>$permission->status ,
        'permission_id' => $first->permission_id , 'permission_accesse_id' => $permission->permission_accesse_id  ]);

        // echo $permission->status.'<br>';
        }

        // dd('hi');


       Alert::success('با موفقیت کپی شد', 'اطلاعات نقش کاربری با موفقیت ثبت شد');
       return redirect()->route('admin.permission.index');


    }


}
