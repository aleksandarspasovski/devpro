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
}
// create table likes(
// 	id int primary key auto_increment not null,
// 	liked int,
// 	users_id int not null
// );