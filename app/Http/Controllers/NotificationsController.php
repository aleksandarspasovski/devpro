<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Login;

class NotificationsController extends Controller
{
	public function index(Request $req)
	{	
		if (session()->has('logged')) {
			$id = session()->get('logged');
			$get_info = new Login;
			$req = $get_info->index($id);
			$link_url = '/notifications';
			return view('/notifications')->with(['req' => $req, 'link_url' => $link_url]);
		} else{
			session()->forget('logged');
			return redirect('error');
		}
	}
    
}
