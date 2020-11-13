<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class loginformmiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$guard=null)
    {
   
       $arr=['email'=>$request->email, 'password'=>$request->password];
       if($request->remember='Remember Me'){
          $remember=true;
      }else {
          $remember=false;
      }
      if(Auth::guard('customer')->check())
      {
            return $next($request);
      }
      else
      {        
          
           return redirect("loginform");
      }
           
          return redirect("loginform");
        
      }
    
}
