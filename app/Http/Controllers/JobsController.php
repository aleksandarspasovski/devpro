<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobsController extends Controller
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
	public function job(Request $req)
	{
		if (empty($req['job_title'])) {
			return redirect('/about?job_err=job is expired or deleted');
		}
		var_dump($req['job_id']); 
		var_dump($req['job_title']);die;
	}
}
