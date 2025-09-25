<?php

namespace App\Http\Controllers\Api;

use SoapClient;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Authentication;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Traits\ApiResponseController;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\Api\User\ProfileResource;

class ProfileController extends Controller
{

        use ApiResponseController;

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $request->user()->id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $user = $request->user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->tell = $request->tell;
        $user->address = $request->address;

        if ($request->password) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return response()->json([
            'message' => 'Profile updated successfully!',
            'user' => $user
        ]);
    }

    public function update_name(Request $request)
    {


        $user = $request->user();
        $user->name = $request->name;
        $user->save();


        return new ProfileResource($request->user());

    }
    public function upload_profile(Request $request)
    {
                // Validate the request to ensure a file is present
                $request->validate([
                    'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
                ]);

                $file = $request->file('image');



        $imgurl  =  uploadFile($request->file('image'),'images/banks','');


        $user = $request->user();
        $user->image = $imgurl;
        $user->save();
                // Respond with the file path
                return response()->json(['url' => $imgurl], 201);
    }


    public function checked_codeverify(Request $request)
    {

        $user = User::find($request->user()->id);

        if($user->remember_token==null){
            $random = Str::random(24);
            $update = $user->update([ 'remember_token'=> $random  ]);
            $user = User::find($request->user()->id);

        }

         if($user->authentication->tell_code_verify==$request->code_verify_tell){
            $user->authentication->update([ 'tell_verify' => 'active' ]);

            return response()->json([
                'code_verify_tell' => $request->code_verify_tell,
                'remember_token' => $user->remember_token,
                'tell_verify' => 'active',
                'email_verify' => $user->authentication->email_verify,
                'codmelli_verify' => $user->authentication->codmelli_verify,
                'status' => 'success'
            ]);
         }else{

            return response()->json([
                'code_verify_tell' => $request->code_verify_tell,
                'status' => 'error'
            ]);
         }



    }
    public function checked_codeverify_email(Request $request)
    {

        $user = User::find($request->user()->id);

        if($user->remember_token==null){
            $random = Str::random(24);
            $update = $user->update([ 'remember_token'=> $random  ]);
            $user = User::find($request->user()->id);

        }

         if($user->authentication->email_code_verify==$request->code_verify_email){
            $user->authentication->update([ 'email_verify' => 'active' ]);

            return response()->json([
                'code_verify_email' => $request->code_verify_email,
                'remember_token' => $user->remember_token,
                'tell_verify' => $user->authentication->tell_verify,
                'codmelli_verify' => $user->authentication->codmelli_verify,
                'email_verify' => 'active',
                'status' => 'success',
            ]);
         }else{

            return response()->json([
                'code_verify_email' => $request->code_verify_email,
                'status' => 'error'
            ]);
         }



    }
    public function checked_active_codmelli(Request $request)
    {

        $user = User::find($request->user()->id);


         if( check_national_code($request->codmelli)==1){
            $user->authentication->update([ 'codmelli_verify' => 'active' , 'codmelli'=>$request->codmelli]);

            return response()->json([
                'code_verify_email' => $request->code_verify_email,
                'remember_token' => $user->remember_token,
                'tell_verify' => $user->authentication->tell_verify,
                'codmelli_verify' => 'active',
                'email_verify' =>  $user->authentication->email_verify,
                'status' => 'success',
            ]);
         }else{

            return response()->json([
                'code_verify_email' => $request->code_verify_email,
                'status' => 'error'
            ]);
         }



    }
    public function create_codeverify(Request $request )
    {
        $data = $request->all();

        $name = $data['name'];
        $email = $data['email'];
        $user = User::find($request->user()->id);
        $user->update([ 'email'=>$email ]);
        $authentication = $user->authentication;
        $authentication->update([ 'email'=>$email ]);
         validate_empty_respons( $authentication , $name  );

        $notif=notif_array( 'active','inactive','active' );
        send_notification_all($request->user(),'validation_email', $user , $notif );



        return $user;
    }
    public function user_codeverify(Request $request)
    {
        $user = User::find($request->user()->id);


        $authentication = $user->authentication;
        validate_empty($authentication , 'tell');




        $notif=notif_array( 'inactive','active','active' );
        send_notification_all($user,'validation_login', null , $notif );

        return $user->authentication;
    }
    public function profile_user(Request $request)
    {
        if(!$request->user()){
        return $this->errorResponse([ 'data'=>'']);
        }else{
            update_data_user_auth($request->user());
            return new ProfileResource($request->user());

        }
    }


    public function check_national_code(Request $request , $codmelli){

       $status = check_national_code($codmelli);
       $response = [
        'date' => Carbon::now()->toIso8601String(),
        'codmelli' => $codmelli ,
        'status' => $status
    ];

    if($status == 1){ $codmelli_verify = 'active';}
    if($status == 0){ $codmelli_verify = 'inactive'; }
        $user = $request->user();
        Authentication::where([ ['user_id',$user->id]])->update([ 'codmelli_verify'=> $codmelli_verify ,
        'codmelli'=>$codmelli ]);



    return response()->json($response);

    }
    public function check_national_code_get( $codmelli){

       $status = check_national_code($codmelli);
       $response = [
        'date' => Carbon::now()->toIso8601String(),
        'codmelli' => $codmelli ,
        'status' => $status
    ];

    if($status == 1){ $codmelli_verify = 'active';}
    if($status == 0){ $codmelli_verify = 'inactive'; } 


    return response()->json($response);

    }

}
