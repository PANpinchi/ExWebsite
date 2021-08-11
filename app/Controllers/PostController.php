<?php 

namespace App\Controllers;

session_start();

use App\Controllers\BaseController;
use App\Models\Post_user_login;
use App\Models\Post_login;

class PostController extends BaseController
{
	public function index()
	{
		return view('posts/index');
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

	/* 忘記密碼頁面 */
	public function forget()
	{
		return view('posts/forget');
	}

	/* 更改密碼頁面 */
	public function change_password()
	{
		return view('posts/change_password');
	}

	/*匹配後台帳號*/
	public function compare_user_account()
	{
		/* 輸入的帳號及密碼 */
		$data = [
			'email' => $this->request->getVar('email'),
			'password' => $this->request->getVar('password'),
			'valicode' => $this->request->getVar('valicode')
		];

		if($data['valicode'] != $_SESSION['code']){
			echo '<script>alert("驗證碼輸入錯誤，請重新登入！")</script>';
			return view('posts/user_login');
		}

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
				echo '<script>alert("密碼輸入錯誤，請重新登入！")</script>';
				return view('posts/user_login');
			}
		}

		if($check == 0){
			echo '<script>alert("帳號輸入錯誤，請重新登入！")</script>';
			return view('posts/user_login');
		}
	}

	/*匹配前台帳號*/
	public function compare_account()
	{
		/* 輸入的帳號及密碼 */
		$data = [
			'account' => $this->request->getVar('account'),
			'password' => $this->request->getVar('password'),
			'valicode' => $this->request->getVar('valicode')
		];

		if($data['valicode'] != $_SESSION['code']){
			echo '<script>alert("驗證碼輸入錯誤，請重新登入！")</script>';
			return view('posts/login');
		}

		$model = new Post_login(); //開啟 account 資料庫
		
		$users = $model->findAll(); //取得資料

		$check = 0; //檢查是否匹配帳號
		
		/* 檢查是否匹配帳號 */
		for($i = 0; isset($users[$i]); $i++)
		{
			$account = strcmp($data['account'], $users[$i]['account']);
			$password = strcmp($data['password'], $users[$i]['password']);

			if($account == 0 && $password == 0){
				print_r($users[$i]['name']);
				echo ' 歡迎登入！';
				$check = 1;
				break;
			}
			else if($account == 0 && $password != 0){
				echo '<script>alert("密碼輸入錯誤，請重新登入！")</script>';
				return view('posts/login');
			}
		}

		if($check == 0){
			echo '<script>alert("帳號輸入錯誤，請重新登入！")</script>';
			return view('posts/login');
		}
	}

	/* 忘記密碼 */
	public function forget_account()
	{
		/* 輸入的帳號及密碼 */
		$data = [
			'account' => $this->request->getVar('account'),
			'email' => $this->request->getVar('email'),
			'valicode' => $this->request->getVar('valicode')
		];

		if($data['valicode'] != $_SESSION['code']){
			echo '<script>alert("驗證碼輸入錯誤，請重新登入！")</script>';
			return view('posts/forget');
		}

		$model = new Post_login(); //開啟 account 資料庫
		
		$users = $model->findAll(); //取得資料

		/* 檢查是否匹配帳號 */
		for($i = 0; isset($users[$i]); $i++)
		{
			$account = strcmp($data['account'], $users[$i]['account']);
			$email = strcmp($data['email'], $users[$i]['email']);

			if($account == 0 && $email == 0){
				$_SESSION['account'] = $data['account'];
				$_SESSION['email'] = $data['email'];
				$_SESSION['id'] = $i + 1;
				echo '<script>alert("帳號驗證成功，請設定新的密碼！")</script>';
				return view('posts/change_password');
			}
			else if($account == 0 && $email != 0){
				echo '<script>alert("電子郵件輸入錯誤，請重新輸入！")</script>';
				return view('posts/forget');
			}
		}

		echo '<script>alert("帳號輸入錯誤，請重新輸入！")</script>';
		return view('posts/forget');
	}

	/* 更改密碼 */
	public function change_pass()
	{
		/* 輸入的帳號及密碼 */
		$data = [
			'password' => $this->request->getVar('password'),
			'check' => $this->request->getVar('check'),
			'valicode' => $this->request->getVar('valicode')
		];

		if($data['valicode'] != $_SESSION['code']){
			echo '<script>alert("驗證碼輸入錯誤，請重新登入！")</script>';
			return view('posts/change_password');
		}

		$same = strcmp($data['password'], $data['check']);

		if($same == 0)
		{
			$model = new Post_login(); //開啟 account 資料庫

			$model->save([
				'id' => $_SESSION['id'],
				'account' => $_SESSION['account'],
				'password' => $data['password'],
				'email' => $_SESSION['email']
			]);

			echo '<script>alert("更改密碼成功，跳轉回登入頁面！")</script>';
			session_destroy();
			return view('posts/login');
		}
		else{
			echo '<script>alert("兩次密碼不一致，請重新輸入！")</script>';
			return view('posts/change_password');
		}
	}

	/* 產生驗證碼 */
	public function verification_code()
	{		
		/* 創建驗證碼 */
		$all = array_merge(range('a', 'z'), range('A', 'Z'), range(0, 9));
		$div = ['1', 'l', '0', 'o', 'O', 'I'];
		$word = array_diff($all, $div);
		unset($all ,$div);
	
		$index = array_rand($word, 4);
		shuffle($index);
	
		$_SESSION['code'] = '';
		foreach($index as $i){
			$_SESSION['code'] .= $word[$i];
		}
	
		/* 生成圖片 */
		$w = 100;
		$h = 36;
		header("Content-type: image/PNG");
		$im = imagecreate($w, $h);
		$black = imagecolorallocate($im, mt_rand(0, 200), mt_rand(0, 120), mt_rand(0, 120));
		$gray = imagecolorallocate($im, 100, 100, 100);
		$bgcolor = imagecolorallocate($im, 235, 236, 237);
	
		/*背景*/
		imagefilledrectangle($im, 0, 0, $w, $h, $bgcolor);
		/*邊框*/
		imagerectangle($im, 0, 0, $w-1, $h-1, $gray);
		/*隨機生成大量點*/
		for ($i = 0; $i < 200; $i++) {
			$color = imagecolorallocate($im, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
			imagesetpixel($im, rand(0, $w), rand(0, $h), $color);
		}
	
		/* 將字符隨機顯示在圖片上 */
		$strx = rand(3, 8);
		for ($i = 0; $i < 4; $i++) {
			$strpos = rand(5, 15);
			imagestring($im, 5, $strx, $strpos, substr($_SESSION['code'], $i, 1), $black);
			$strx += rand(25, 28);
		}
	
		/*輸出圖片*/
		$this->response->setHeader('Content-Type', 'image/png');
		imagepng($im);
		/*刪除圖片*/
		imagedestroy($im);
	}
}