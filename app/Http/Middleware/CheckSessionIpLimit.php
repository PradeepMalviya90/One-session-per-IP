<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class CheckSessionIpLimit
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
	 
    public function handle(Request $request, Closure $next): Response
    {
		$ipaddress = $request->ip();

		if(Session::has("session_ip_$ipaddress")){
            return response(view('Secondsession', [
                'message' => 'Another session in progress. Please try again later.',
                'second_session_url' => route('second-session'),
            ]));
           
        }
		
        return $next($request);
    }
}
