<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Login;

class LoginController extends Controller
{
	//Handle logic for loging users
    public function login(Request $req)
    {
    	$this->validate($req, [
    		'email' => 'required',
    		'password' => 'required'
    	]);

    	$email = trim($req->email);
    	$password = trim($req->password);

        $email = $req->input('email');
        $password = $req->input('password');

        // session()->flush();
        // print_r(session()->all());

        $login = new Login;
        if ($login->display($email, $password)) {
            return redirect()->to('/home');
        } else{
            return redirect()->to('/')->with('err', 'We couldn\'t find user with this credentials');
        }

        // session()->forget('logged');
        // $req->session()->put('logged', $user);

    }
    
    public function saveQuote(Request $req, $id)
    {
        // var_dump($req);die;
        $this->validate($req, [
            'message' => 'max:60'
        ]);
        $quote = trim($req->input('message'));
        $quote = ucfirst($quote);
        if ($quote == '') {
            return redirect()->back()->with('empty', 'Input field is empty!');
        }

        $send_quote = new Login;
        $send_quote->saveQuote($quote, $id);
        return redirect()->back();
    }

    public function logout()
    {
        session()->flush();
        return redirect('/');
    }
}
