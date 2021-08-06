<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Post;

class PostController extends BaseController
{
	public function index()
	{
		return view('posts/index');
	}

	public function user_login()
	{
		return view('posts/user_login');
	}

	public function compare_account()
	{
		$data = [
			'email' => $this->request->getVar('email'),
			'password' => $this->request->getVar('password')
		];

		$db = new Post();
		
		if(!$db){
				echo $db->lastErrorMsg();
		} 
		else {
			echo "Opened database successfully\n";
		}
	
		$ret = $db->query("SELECT * from $db");
		
		while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
			echo "id = ". $row['id'] . "\n";
			echo "name = ". $row['name'] ."\n";
			echo "email = ". $row['email'] ."\n";
			echo "password =  ".$row['password'] ."\n\n";
		}

		echo "Operation done successfully\n";
		$db->close();

		print_r($data);
	}
}