<?php
namespace App\Http\Services;

use Auth;

class PermissionService{

    public static function isThisUserHavePermission($permission_name){
      $permissions = Auth::user()->permissions;
      foreach($permissions as $permission){
        if($permission->permission->name == $permission_name){
          return true;
        }
      }
      return false;
    }
}
