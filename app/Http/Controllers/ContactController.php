<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Login;

class ContactController extends Controller
{
	public function index(Request $req)
	{	
		if (session()->has('logged')) {
			$id = session()->get('logged');
			$get_info = new Login;
			$req = $get_info->index($id);
			$link_url = '/contact';
			return view('/contact')->with(['req' => $req, 'link_url' => $link_url]);
		} else{
			session()->forget('logged');
			return redirect('error');
		}
	}
    
}
