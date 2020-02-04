<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Login;

class HomeController extends Controller
{
	public function index(Request $req)
	{	
		if (session()->has('logged')) {
			$id = session()->get('logged');
			$get_info = new Login;
			$req = $get_info->index($id);
			$link_url = '/home';
			return view('/home')->with(['req' => $req, 'link_url' => $link_url]);	
		} else{
			session()->forget('logged');
			return redirect('error');
		}
	}

	public function newerFeeds(){
		return 123;
	}

	public function olderFeeds(){
		return 123456;
	}
}