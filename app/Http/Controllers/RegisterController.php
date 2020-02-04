<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Register;

class RegisterController extends Controller
{
   public function create(Request $req)
   {
   	//Handle logic for register users
    $this->validate($req, [
      'first_name' => 'required',
      'last_name' => 'required',
      'nickname' => 'required',
      'email' => 'required',
      'password' => 'required',
      're_password' => 'required',
      'birth' => 'required'
   ]);

    $first_name = trim($req->first_name);
    $last_name = trim($req->last_name);
    $nickname = trim($req->nickname);
    $email = trim($req->email);
    $password = trim($req->password);
    $re_password = trim($req->re_password);
    $birth = trim($req->birth);

    if ($password != $re_password) {
      return redirect('/register')
      ->with('err' ,'Passwords did not match');
   }
   		// $msg = [];
   		// if ($first_name === '') {
   		// 	$msg = 'First name is empty';
   		// }
   		// if ($last_name === '') {
   		// 	$msg = 'Last name is empty';
   		// }
   		// if ($email === '') {
   		// 	$msg = 'Email is empty';
   		// }
   		// if ($password === '') {
   		// 	$msg = 'Password is empty';
   		// }
   		// if ($re_password === '') {
   		// 	$msg = 'Re-Type password is empty';
   		// }

   $create = new Register;
   
   $create->first_name = $req->input('first_name');	
   $create->last_name = $req->input('last_name');	
   $create->nickname = $req->input('nickname'); 
   $create->email = $req->input('email');	
   $create->password = $req->input('password');	
   $create->birth = $req->input('birth');

   $create->save();

   return redirect('/')
   ->with('success', 'User created');

}
}
