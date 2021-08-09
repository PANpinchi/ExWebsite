<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Post_user_login;
use App\Models\Post_login;

class PostController extends BaseController
{
	public function index()
	{
		return view('posts/index');
	}

	public function date()
	{
		return view('posts/date');
	}

	/*期限資料*/
	public function store()
	{
		$date=
			[
				'startdate1' => $this->request->getVar('start1'),
				'startdate2' => $this->request->getVar('start2'),
				'startdate3' => $this->request->getVar('start3'),
				'startdate4' => $this->request->getVar('start4'),
				'startdate5' => $this->request->getVar('start5')
				/*'startdate6' => $this->request->getVar('start5')
				'startdate7' => $this->request->getVar('start5')
				'startdate8' => $this->request->getVar('start5')
				'startdate9' => $this->request->getVar('start5')
				'startdate10' => $this->request->getVar('start5')
				'startdate11' => $this->request->getVar('start5')
				'startdate12' => $this->request->getVar('start5')
				'startdate13' => $this->request->getVar('start5')
				'startdate14' => $this->request->getVar('start5')
				'startdate15' => $this->request->getVar('start5')
				'startdate16' => $this->request->getVar('start5')
				'startdate17' => $this->request->getVar('start5')
				'startdate18' => $this->request->getVar('start5')
				'startdate19' => $this->request->getVar('start5')*/
			];
		print_r($date);
	}

	/* 後台登入頁面 */
	public function user_login()
	{
		return view('posts/user_login');
	}

	/* 前台登入頁面 */
	public function login()
	{
		return view('posts/login');
	}

	/*匹配後台帳號*/
	public function compare_user_account()
	{
		/* 輸入的帳號及密碼 */
		$data = [
			'email' => $this->request->getVar('email'),
			'password' => $this->request->getVar('password')
		];

		$model = new Post_user_login(); //開啟 account 資料庫
		
		$users = $model->findAll(); //取得資料

		$check = 0; //檢查是否匹配帳號
		
		/* 檢查是否匹配帳號 */
		for($i = 0; isset($users[$i]); $i++)
		{
			$email = strcmp($data['email'], $users[$i]['email']);
			$password = strcmp($data['password'], $users[$i]['password']);

			if($email == 0 && $password == 0){
				print_r($users[$i]['name']);
				echo ' 歡迎登入！';
				$check = 1;
				break;
			}
			else if($email == 0 && $password != 0){
				echo '密碼輸入錯誤，請重新登入！';
				$check = 2;
				break;
			}
		}

		if($check == 0){
			echo '帳號輸入錯誤，請重新登入！';
		}
	}

	/*匹配前台帳號*/
	public function compare_account()
	{
		/* 輸入的帳號及密碼 */
		$data = [
			'account' => $this->request->getVar('account'),
			'password' => $this->request->getVar('password')
		];

		$model = new Post_login(); //開啟 account 資料庫
		
		$users = $model->findAll(); //取得資料

		$check = 0; //檢查是否匹配帳號
		
		/* 檢查是否匹配帳號 */
		for($i = 0; isset($users[$i]); $i++)
		{
			$email = strcmp($data['account'], $users[$i]['account']);
			$password = strcmp($data['password'], $users[$i]['password']);

			if($email == 0 && $password == 0){
				print_r($users[$i]['name']);
				echo ' 歡迎登入！';
				$check = 1;
				break;
			}
			else if($email == 0 && $password != 0){
				echo '密碼輸入錯誤，請重新登入！';
				$check = 2;
				break;
			}
		}

		if($check == 0){
			echo '帳號輸入錯誤，請重新登入！';
		}
	}
}