<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Login extends Model
{
	public function index($id)
	{
		$sql = DB::select('select id, first_name, last_name, quote from registers where id = :id', ['id' => $id]);

		return $sql;
	}
	public function index1()
	{
		$sql1 = DB::select('select * from registers order by id desc limit 5');
		// var_dump($sql1[0]->quote);die;
		return $sql1;
	}
	public function findMe($id)
	{
		$sql1 = DB::select('select * from registers where id = :id', ['id' => $id]);
		$salt = hash('md5', $sql1[0]->id);
		// var_dump($salt);die;

		return $sql1;
	}
	public function display($email, $password)
	{
		$sql = DB::select('select id, first_name, last_name, email, password from registers where email = :email and password = :password', ['email' => $email, 'password' => $password]);
		$count_nr = count($sql);

		if ($count_nr == 1) {
			$res = $sql[0]->id;
			session()->put('logged', $res);
			return true;
		}else{
			return false;
		}
		return $count_nr;
	}

	public function users()
    {
        $sql = DB::select('select * from registers');
		return $sql;
    }

	public function saveQuote($quote, $id)
	{
		$sql_quote = DB::table('registers')->where('id', $id)->update(['quote' => $quote]);
		// var_dump($sql_quote);die;
		return $sql_quote;
	}

}
