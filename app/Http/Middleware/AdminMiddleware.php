<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if(\Auth::check()){

            if(\Auth::user()->role=='1'){
                return $next($request);
                


            }else{
                return redirect('/')->with('message' ,'Access denied as you are not an admin');
                


            }

        }else{
            return redirect('/')->with('message' ,'Login to access the message');

        }
        return $next($request);
    }
}
