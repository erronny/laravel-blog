<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\DB;

class ClearanceMiddleware {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {       
    $roles = Auth::user()->roles()->pluck('name')->implode(' ');
    $role_id = Auth::user()->roles()->pluck('id')->implode(' ');
    $modulePermission = DB::table('role_has_permissions')->join('permissions', 'role_has_permissions.permission_id', '=', 'permissions.id')->where('permissions.parent_id','0')->where('role_id',$role_id)->select('permissions.id')->get()->pluck('id')->toArray();    
    // dd($modulePermission);
    //dd($request->is('admin/users'));
    // if ($request->is('admin/users')) {
    //     if(!in_array("1", $modulePermission)){
    //         abort('401');
    //     }
    // }

    if($request->is('admin/language')){
        if($roles != 'Super Admin')
                abort('401');
    }
    
    // if($request->is('admin/users/create')){
    //     $moduleChildPermission = DB::table('role_has_permissions')->join('permissions', 'role_has_permissions.permission_id', '=', 'permissions.id')->where('permissions.parent_id','1')->where('role_id',$role_id)->select('permissions.id')->get()->pluck('id')->toArray(); 
    //         if(!in_array("21", $moduleChildPermission)){
    //             abort('401');
    //         }
    // }

    if ($request->is('admin/subtitle')) {
        if(!in_array("3", $modulePermission)){
            abort('401');
        }
    }

    if ($request->is('admin/studio')) {
        if(!in_array("2", $modulePermission)){
            abort('401');
        }
    }
    
    if($request->is('admin/studio/create')){
        $moduleChildPermission = DB::table('role_has_permissions')->join('permissions', 'role_has_permissions.permission_id', '=', 'permissions.id')->where('permissions.parent_id','2')->where('role_id',$role_id)->select('permissions.id')->get()->pluck('id')->toArray(); 
            if(!in_array("15", $moduleChildPermission)){
                abort('401');
            }
    }
    // if ($request->is('admin/job')) {
    //         if (!Auth::user()->hasPermissionTo('See Job Posts')) {
    //             abort('401');
    //         } else {
    //             return $next($request);
    //         }
    // }

   

   
   
        return $next($request);
    }
}