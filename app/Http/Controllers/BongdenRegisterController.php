<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\User;
use App\UserPermission;
use App\Permission;

class BongdenRegisterController extends Controller
{
    public function __construct(){
      $this->middleware('guest');
    }

    public function index(){
      return view('auth.login');
    }

    public function register(RegisterRequest $request){
      $user = new User;
      $user->name = $request->username;
      $user->email = $request->email;
      $user->yearOfbirth = $request->birthyear;
      $user->sex = $request->sex;
      $user->password = Hash::make($request->password);
      $user->avatar_path = asset('sources/images/logo.png');
      $user->save();

      $user_permission = new UserPermission;
      $user_permission->user_id = $user->id;
      $basic_permission_id = Permission::where('name','=','write article')->first()->id;
      $user_permission->permission_id = $basic_permission_id;
      $user_permission->save();
      
      Auth::login($user);
      return redirect('/user');
    }
}
