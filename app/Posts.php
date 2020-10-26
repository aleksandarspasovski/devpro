<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Posts extends Model
{
   public function storeLikes($it, $id)
   {
   		// var_dump($id);die;
   		$sql = DB::insert('insert into likes (id, liked, users_id) values (null, ?, ?)', [$it, $id]);
   		// DB::insert('insert into users (id, name) values (?, ?)', [1, 'Dayle']);
   		var_dump($sql);die;
   }
   public function displayLikes($id)
   {

   }
   public function insertPost()
   {

   }
}