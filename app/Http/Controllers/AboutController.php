<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Login;

class AboutController extends Controller
{
	public function index(Request $req)
	{	
		if (session()->has('logged')) {
			$id = session()->get('logged');
			$get_info = new Login;
			$req = $get_info->index($id);
			$link_url = '/about';
			return view('/about')->with(['req' => $req, 'link_url' => $link_url]);
		} else{
			session()->forget('logged');
			return redirect('error'); 
		}
	}
	public function listPeople(Request $req, $response)
	{
		$id = session()->get('logged');
		$ses_id = hash('sha1', $id);

		if ($response === $ses_id) {

			$login = new Login;
	        if ($login->users()) {

	        	$login_n = $login->users();
	            return json_encode($login_n);

	        } else{
	        	var_dump('nije ureduuu');
	        	// $link_back = '<a href="/about"></a>';
	         //    return redirect()->to('/home')->with('err', 'If page won\'t load click here '.$link_back.'');
	        }

		} else{
			$link_back = '<a href="/about"></a>';
            return redirect()->to('/home')->with('err', 'If page won\'t load click here '.$link_back.'');
		}

	}
    
}
