<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SessionLimitController extends Controller
{
    public function generate_session(Request $request){
		    $ipaddress = $request->ip();

        $Session = Session::put("session_ip_$ipaddress", $ipaddress);

        return 'Session Generated';
      
	  }

  public function second_session(Request $request){
    $ipaddress = $request->ip();
    Session::flush("session_ip_$ipaddress");

    Session::put("session_ip_$ipaddress", $ipaddress);

    return 'previous session closed & new session generate';
  }

}
