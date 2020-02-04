<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Login;

class SubmitControllers extends Controller
{
    public function index(Request $req)
    {   
        if (session()->has('logged')) {
            $id = session()->get('logged');
            $get_info = new Login;
            $req = $get_info->index($id);
            $link_url = '/messages';
            return view('/messages')->with(['req' => $req, 'link_url' => $link_url]);    
        } else{
            session()->forget('logged');
            return redirect('error');
        }
    }

    public function submit(Request $request)
    {
    	$this->validate($request, [
    		'nickname' => 'required'
    	]);

    	$message = new Message;
    	$message->nickname = $request->input('nickname');
    	$message->message = ucfirst($request->input('message'));

    	$message->save();

    	return redirect('/home')
    		->with('succ', 'Message sent / check it in tab');
    }

    public function getMessages()
    {
    	$message = Message::all();

    	return view('messages')->with('messages', $message);
    }
}
