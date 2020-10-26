<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Login;

class UsersController extends Controller
{
   public function index(Request $req)
	{	
		if (session()->has('logged')) {
			$id = session()->get('logged');
			$get_info = new Login;
			$req = $get_info->index($id);

			$req1 = $get_info->index1();
			$link_url = '/users';
			return view('/users')->with(['req' => $req, 'req1' => $req1, 'link_url' => $link_url]);	
		} else{
			session()->forget('logged');
			return redirect('error');
		}
	}

	public function listedUser(Request $req, $id)
	{
		$link_url = '/users'; 
		$id = session()->get('logged');
 
		$listed_user = new Login();
		$listed = $listed_user->findMe($req->id);
		$req = $listed_user->index($id);
		$req1 = $listed_user->index1();
		$route = resource_path().'/views/user/dpro/'.$listed[0]->first_name. $listed[0]->last_name.'-'.$listed[0]->id; 
		$this->checkIfFolderExists($route);

		return view('user.dpro.'.$listed[0]->first_name. $listed[0]->last_name.'-'.$listed[0]->id.'.index')->with(['req' => $req, 'req1' => $req1, 'listed' => $listed, 'link_url' => $link_url]);	
	}
	private function checkIfFolderExists($route){
		$base_dir = glob($route);
		if (!$base_dir) {
			echo 'Something went wrong. Contact administrators: <a href="#">admin@gmail.com</a>';die;
		}
	}
	public function imageTitle($title_desc)
	{
		$title = explode('/', $title_desc);
		$title = substr($title[1], 0,strpos($title[1], '.'));
		var_dump($title);die;
	}
}
