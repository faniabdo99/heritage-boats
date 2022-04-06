<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
class isAdmin{
    public function handle(Request $request, Closure $next){
        if(auth()->check()){
            if(in_array(auth()->user()->role,[1,2])){
                return $next($request);
            }
        }
        abort(404);
    }
}