<?php

namespace App\Controllers;

use App\Controllers\BaseController;

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

	public function store()
	{
		$data = [
			'email' => $this->request->getVar('email'),
			'password' => $this->request->getVar('password')
		];

		print_r($data);
	}
}