<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{

    private $guards;
   public function handle($request, \Closure $next, ...$guards)

   {
    $this->guards = $guards;
    $this->authenticate($request, $guards);
    return $next($request);
   }

    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        if($request->expectsJson()){
             
            return null;
        }else
            if(in_array('cms', $this->guards)){
                return route('back.login.login');

            }else{
                return route('login');
            }
        
    }
}
