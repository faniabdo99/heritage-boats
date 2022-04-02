<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class isSuperAdmin{
    public function handle(Request $request, Closure $next){
        if(auth()->check()){
            if(auth()->user()->role == 1){
                return $next($request);
            }
        }
        abort(403);
    }
}
