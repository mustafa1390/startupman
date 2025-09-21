<?php

namespace App\Providers;

use App\Models\Setting;
use App\Models\Role\Permission;
use Illuminate\Support\Collection;
use App\Models\Role\PermissionRole;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Blade;
use App\Models\Role\PermissionAccesse;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    { 
Blade::if('permission', function ($base) {
    $count = 0;
    $Permission = Permission::where([ ['link',$base], ])->first();
    if($Permission){
        $count = PermissionRole::where([
            ['permission_id',$Permission->id],
            ['role_id',auth()->guard('admin')->user()->role_id],
            ['status','active'],
             ])->count();

            //  dd($count);
    }

    if((auth()->guard('admin')->user()->role)){
    if(($count == 0)&&(auth()->guard('admin')->user()->role->link!='superadmin')){
    return 0;
    }
    }

                    if((($count != 0))&& (auth()->guard('admin')->user() ) && (auth()->guard('admin')->user()->id)){
                        return 1;
                     }




if((auth()->guard('admin')->user()->role)){
if((auth()->guard('admin')->user()->role->link=='superadmin')){
return 1;
}
}

                   });


Blade::if('access', function ($base,$linkaccess) {
    $count = 0;
    $Permission = Permission::where([ ['link',$base], ])->first();
    $Permission_access = PermissionAccesse::where([ ['link',$linkaccess], ])->first();
    if($Permission){
        $count = PermissionRole::where([
            ['permission_id',$Permission->id],
            ['permission_accesse_id',$Permission_access->id],
            ['role_id',auth()->guard('admin')->user()->role_id],
            ['status','active'],
             ])->count();

            //  dd($count);
    }


    if((auth()->guard('admin')->user()->role)){
    if(($count == 0)&&(auth()->guard('admin')->user()->role->link!='superadmin')){
    return 0;
    }
    }

                    if((($count != 0))&& (auth()->guard('admin')->user() ) && (auth()->guard('admin')->user()->id)){
                        return 1;
                     }



if((auth()->guard('admin')->user()->role)){
if((auth()->guard('admin')->user()->role->link=='superadmin')){
return 1;
}
}



});



Blade::if('template', function ($base) {

    $tx = 1;
    $arzicoin = 0;
    if(Auth::guard('user')->user()){
    if(Auth::guard('user')->user()->email=='mustafa1390@gmail.com'){
        $tx = 0;  $arzicoin = 1;
    }
    }


    if(Auth::guard('admin')->user()){
    if((Auth::guard('admin')->user()->email=='admin@arzico.com')||
    Auth::guard('admin')->user()->email=='mhfz8061@gmail.com'||
    Auth::guard('admin')->user()->email=='ayda@arzico.com'){
        $tx = 0;  $arzicoin = 1;
    }
    }




    if($base=='tx'){
        return $tx;
    }else{
        return $arzicoin;
    }

   });



        /**
         * Paginate a standard Laravel Collection.
         *
         * @param int $perPage
         * @param int $total
         * @param int $page
         * @param string $pageName
         * @return array
         */
        Collection::macro('paginate', function($perPage, $total = null, $page = null, $pageName = 'page') {
            $page = $page ?: LengthAwarePaginator::resolveCurrentPage($pageName);

            return new LengthAwarePaginator(
                $this->forPage($page, $perPage),
                $total ?: $this->count(),
                $perPage,
                $page,
                [
                    'path' => LengthAwarePaginator::resolveCurrentPath(),
                    'pageName' => $pageName,
                ]
            );
        });





    }
}
