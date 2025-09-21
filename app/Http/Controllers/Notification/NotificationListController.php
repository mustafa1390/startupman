<?php

namespace App\Http\Controllers\Notification;

use App\Models\Post;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Notification\NotificationList;
use App\Models\Notification\NotificationType;
use App\Models\UserList;

class NotificationListController extends Controller
{


    public function index(){


        // return view('emails.temp1'   );


        update_model_v2('notification_services');
        update_model_v2('notification_types');
        update_model_v2('notification_lists');


        
        $notification_types= NotificationType::all();
        return view('admin.notification.list.index' , compact(['notification_types'  ]));
    }


    public function type($id){

        $notification_lists=NotificationList::where([ ['notification_type_id', '=' , $id ], ])->get();
        $notification_type=NotificationType::find($id);
        return view('admin.notification.list.type' , compact(['notification_lists' , 'notification_type'  ]));

    }


    public function edit($id){

        $notification_list= NotificationList::find($id);
        $notification_list= NotificationList::find($id);
        $notification_type=$notification_list->notification_type;


        return view('admin.notification.list.edit' , compact(['notification_list' , 'notification_type'    ]));

    }




    public function update(Request $request, $id , NotificationList $notification_list){
        $notification_list= NotificationList::find($id);
        $data = $request->all();
        $notification_list->update($data);
        Alert::success('با موفقیت ویرایش شد', 'اطلاعات با موفقیت ویرایش شد');
        return back();
    }



    public function status(Request $request , $id){
        $status=Change_status($id,'notification_lists');
        return back();
    }

    public function email_index(){
        $setting= Setting::find(1);
        return view('admin.notification.email.index' , compact(['setting'  ]));
    }



public function email_index_update(Request $request ){

    $request->validate([
        'email_notification' => 'required|email',
    ]);


$setting  = Setting::where('id', 1)->first();
$data = $request->all();
$setting->update($data);

 Alert::success('با موفقیت ویرایش شد', 'اطلاعات با موفقیت ویرایش شد');
 return redirect()->back();


}






}
