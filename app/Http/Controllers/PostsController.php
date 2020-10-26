<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;

class PostsController extends Controller
{
    public function likes(Request $req, $it){
    	$id = session()->get('logged');
    	
    	$post = new Posts();
    	if ($post->storeLikes($it, $id)) {
    		$post->displayLikes($id);
    	};
	}

	public function postCreate(Request $req)
	{
		$file = $_FILES['file']['name'];
		var_dump($file);

		echo '<p>'.'Post_ID '. hash('md5', $_POST['text']);'</p>';

		$text = $_POST['text'];
		$time = $_POST['time'];
 
		$insert_post = new Posts(); 

		var_dump($_POST);die; 


		if (!empty($file)) {
			$this->constructImage($_FILES['file']);
			echo 'Slika je spremna za dalju obradu';
			echo 'setovan je file, slika postoji'; die;
		} else{
			echo 'nije setovan file, slika ne postoji'; die;
		}
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