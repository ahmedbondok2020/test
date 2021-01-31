<?php

namespace App\Http\Middleware;

use App\permission_route;
use App\User;
use App\user_group;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use \Illuminate\Support\Facades\Request;


class IsUserAdmin
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
        if(!auth()->check()){
            return redirect('login');
        }

        if(Auth::user()->admin > 2)
        {
            return redirect('/');
        }

        $url = Request::fullUrl();
        $admin = explode('adminpanel', $url);
        $permission = explode('/', $admin[1]);

//        if (Request::is('adminpanel/' . $permission[1] .'/*')) {
//
//            $userss = DB::table('user_group')->select('group_id')->where('user_id', Auth::user()->id)->get();
//            foreach ($userss as $rs)
//            {
//                $sss[] = $rs->group_id;
//            }
//            $users = collect($sss)->unique()->values()->all();
//            if (!isset($users)){ return 'not not'; return redirect()->back(); }
//
//            $permission_route = DB::table('permission_route')->select('permission')->whereIn('group_id' , $users)->get();
//
//            if ($permission_route->count() < 2)
//            {
//                return 'ok';
//                $permissions = $permission_route;
//            }
//            else{
//                foreach ($permission_route as $per_route)
//                {
//                    $ddd[] = $per_route->permission;
//                }
//                $permissions = collect($ddd)->unique()->values()->all();
//            }
//
//
//            return $permissions;
//
//            if (!isset($permissions)){ return 'not valid'; return redirect()->back(); }
//
//            if (in_array($permission[1] , $permissions))
//            {
//                return 'hello';
//            }
//            else{
//                return 'not valid';
////                return redirect()->back();
//            }
////            $test_per = DB::table('users')
////                ->join('user_group', 'users.id', 'user_group.user_id')
////                ->join('permission_route', 'permission_route.group_id', 'user_group.id')
////                ->select('permission_route.permission')
////                ->where('users.id', Auth::user()->id)
////                ->first();
////            dd($test_per);
//
//            if (!isset($test_per->permission)){ return redirect()->back(); }
//            // will match URL /companies/999 or /companies/create
//        }

        return $next($request);
    }
}
