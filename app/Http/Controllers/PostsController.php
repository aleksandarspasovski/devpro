<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;

class PostsController extends Controller
{
    public function likes(Request $req, $it){
    	$id = session()->get('logged');
    	// var_dump($var);die;
    	$post = new Posts();
    	if ($post->storeLikes($it, $id)) {
    		$post->displayLikes($id);
    	};
	}

	public function postCreate(Request $req)
	{
		$file = $_FILES['file']['name'];
		// var_dump($file);die;

		if (!empty($file)) {
			self::constructImage($_FILES['file']);
			echo 'setovan je file, slika postoji'; die;
		} else{
			echo 'nije setovan file, slika ne postoji'; die;
		}
		// var_dump($req['file']);die;
	}

	private function constructImage($file)
	{
		var_dump($file);die;
	}
}
// create table likes(
// 	id int primary key auto_increment not null,
// 	liked int,
// 	users_id int not null
// );