<?php

namespace App\Http\Controllers\Api;

use Validator;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Authentication;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Traits\ApiResponseController;
use App\Http\Resources\Api\User\AuthverifyResource;
use App\Http\Controllers\Api\BaseController as BaseController;

class RegisterController extends BaseController
{


    use ApiResponseController;
    public function register(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            // 'tell' => 'required|unique:users,tell,$request->tell',
            'tell' => 'required',
            'password' => 'required',
            // 'c_password' => 'required|same:password',
        ]);

        if($validator->fails()){
            return $this->errorResponse([ 'data'=>$validator->errors()]);
        }
        $data = $request->all();
        $user = User::where([ ['tell',$data['tell']] ])->first();

        if($user){
            return $this->errorResponse([ 'data'=>$user]);
        }else{

        $data['password'] = Hash::make($data['password']);
        $user = User::create($data);
        $success['token'] =  $user->createToken('MyApp')->plainTextToken;
        $success['name'] =  $user->name;

        $authentication=  count_auth($user,$user->authentication);


        return $this->successResponse([ 'data'=>$user]);

        }



    }

    /**
     * Login api
     *
     * @return \Illuminate\Http\Response
     */

    public function login(Request $request): JsonResponse
    {

        if(Auth::attempt(['tell' => $request->tell, 'password' => $request->password])){
            $user = Auth::user();
            $success['token'] =  $user->createToken('MyApp')->plainTextToken;
            $success['name'] =  $user->name;
            $success['email'] =  $user->email;
            $success['tell'] =  $user->tell;
            $success['image'] =  $user->image;
            $success['id'] =  $user->id;
            $success['email_code_verify'] =  $user->authentication->email_code_verify;
            $success['tell_code_verify'] =  $user->authentication->tell_code_verify;


            return $this->sendResponse($success, 'User login successfully.');
        }
        else{
            return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
        }
    }

    public function test_pro(Request $request): JsonResponse
    {


                $user = User::find(948);
        $authentication = $user->authentication;

        $notif=notif_array( 'active','inactive','active' );
        send_notification_all($user,'validation_email', $user , $notif );


        dd('hhh');

        $user = User::find(24);
         $success['name'] =  $user->name;
        $success['email'] =  $user->email;
        $success['id'] =  $user->id;

        return  $this->sendResponse($success, 'User login successfully.');

    }


    public function auth_token(Request $request)
    {

        $user = User::where([ ['remember_token',$request->token] ])->first();
        if(!$user){
            return $this->errorResponse([ 'data'=>'']);
        }else{

            return new AuthverifyResource($user);

        }

    }
    public function change_password(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'token' => 'required',
            'tell' => 'required|regex:/^09[0-9]{9}$/',
        ]);



        $user = User::where([ ['tell',$request->tell],['remember_token',$request->token] ])->first();
        if(!$user){
        return $this->errorResponse([ 'data'=>'']);
        }else{
            $random = Str::random(24);
            $newpassword = Hash::make($request->password);
            $user->update([ 'remember_token'=> $random , 'password'=> $newpassword  ]);
            $user = User::where([ ['tell',$request->tell] ])->first();
            return new AuthverifyResource($user);
        }


    }

    public function auth_codeverify(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'tell' => 'required|regex:/^09[0-9]{9}$/',
        ]);



        $authentication = Authentication::where([ ['tell',$request->tell] ])->first();
        if(!$authentication){
        return $this->errorResponse([ 'data'=>'']);
        }else{

            $user = $authentication->user;
                    $random = Str::random(24);


            $user = User::where([ ['tell',$request->tell] ])->update([ 'remember_token'=> $random ]);
            $user = User::where([ ['tell',$request->tell] ])->first();

            validate_empty($authentication , 'tell');
            $notif=notif_array( 'inactive','active','active' );
            send_notification_all($user,'validation_login', null , $notif );

            return new AuthverifyResource($user);

        }


    }


    public function checked_codeverify(Request $request)
    {

        $user = User::where([ ['remember_token',$request->token] ])->first();


         if($user->authentication->tell_code_verify==$request->code_verify_tell){
            $random = Str::random(24);
            $update = $user->update([ 'remember_token'=> $random  ]);

            $authentication = $user->authentication;
            $authentication->update([ 'tell_verify' => 'active' ]);
            $user = User::where([ ['remember_token',$random] ])->first();

            return response()->json([
                'code_verify_tell' => $request->code_verify_tell,
                'token' => $user->remember_token,
                'status' => 'success'
            ]);

         }else{

            return response()->json([
                'code_verify_tell' => $request->code_verify_tell,
                'status' => 'error'
            ]);
         }



    }


}
