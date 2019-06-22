<?php

namespace App\Http\Middleware;

use Closure;
use App\Http\Services\PermissionService;

class CheckPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $permission = $request->route('permission');
        if(PermissionService::isThisUserHavePermission($permission) == false){
          return view('userpage.user_blank')->with('error','Bạn không đủ quyền để thực hiện tính năng này');
        }
        return $next($request);
    }
}
