<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Hash;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class ApiController extends Controller
{
    

    public function signup(Request $request) 
    {
        $users = User::where('email',$request->email)->get();  
        if($users->count()) {
            return response()->json(['status'=>'failed','message'=>'This email already exists!']);
        }

        $user = new User();
        $user->firstname = $request->firstname;
        $user->lastname  = $request->lastname;
        $user->email    = $request->email;
        $user->password = Hash::make($request->password);
        $user->phone    = $request->phone;
        try {
            $user->save();
            return response()->json(['status'=>'success','message'=>'This user successfully registered!']);
        }
        catch(\Exception $e) {
            return response()->json(['status'=>'failed','message'=>'Unable to complete signup at this time!']);
        }
    }


    public function login()
    {

        $credentials = request(['email', 'password']);
        if (! $token = JWTAuth::attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        return response()->json(['token' => $token], 200); //$this->respondWithToken($token);
    }

   
     public function updateProfile(Request $request) {

        $user = auth()->user();
        //die(print_r($user));
        $user->firstname = $request->firstname;
        $user->lastname  = $request->lastname;
        $user->email    = $request->email;
        $user->phone    = $request->phone;
         //picture required
        try {
            $user->save();
            return response()->json(['status'=>'success','message'=>'This user successfully updated!']);
        }
        catch(\Exception $e) {
            return response()->json(['status'=>'failed','message'=>'Unable to complete the update!']);
        }
    }
}
