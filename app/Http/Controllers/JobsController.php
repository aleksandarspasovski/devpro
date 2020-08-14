<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Login;

class JobsController extends Controller
{
    public function index(Request $req)
	{	
		if (session()->has('logged')) {
			$id = session()->get('logged');
			$get_info = new Login;
			$req = $get_info->index($id);
			$link_url = '/jobs/create';
			return view('/jobs/create')->with(['req' => $req, 'link_url' => $link_url]);	
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
	public function jobCreate(Request $req)
	{
		// var_dump($req[0]->);die;
		$id = session()->get('logged');
			$get_info = new Login;
			$req = $get_info->index($id);
			// $link_url = '/jobs';
			$url = url()->current();
			$url = explode('/', $url);
			
			$link_url = 'jobs';
			if (in_array($link_url, $url)) {
				return view('/jobs')->with(['req' => $req, 'link_url' => $link_url]);
			}
	}
}