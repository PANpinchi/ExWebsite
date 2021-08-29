<?php 

namespace App\Controllers;

session_start();

date_default_timezone_set('Asia/Taipei');

use App\Controllers\BaseController;
use App\Models\Post_user_login;
use App\Models\Post_login;
use App\Models\Logindate;
use App\Models\Norcollege;
use App\Models\Starcollege;
use App\Models\Norsenior;
use App\Models\Starsenior;
use App\Models\Star_post_page;
use App\Models\Per_post_page;

class loginController extends BaseController
{

	public function face_recognition()
	{
		$path = 'labeled_images';
		$_SESSION['file_name'] = scandir($path);

		$model = new Post_user_login(); //開啟 user_account 資料庫
		$users = $model->findAll(); //取得資料
		for($i = 0; isset($users[$i]); $i++){
			if($users[$i]['image'] != NULL){
				$label['name'][$i] = $users[$i]['name'];
				$label['image'][$i] = $users[$i]['image'];
			}
			else{
				$label['name'][$i] = false;
				$label['image'][$i] = false;
			}
		}
		$data=[
			'label' => $label
		];
		return view('show/face_recognition', $data);
	}

	public function set_face_id()
	{
		$model = new Post_user_login(); //開啟 user_account 資料庫
		
		$users = $model->where('id', $_SESSION['user_id'])->findAll(); //取得資料

		if(isset($users[0]['image'])){
			$_SESSION['image'] = $users[0]['image'];
		}
		else{
			$_SESSION['image'] = NULL;
		}

		return view('show/set_face_id');
	}

	public function save_img()
	{
		$model = new Post_user_login();

		if(is_uploaded_file($_FILES['img']['tmp_name'])){	
			$DestDIR = "labeled_images/".$_SESSION['user_id'];
			if(!is_dir($DestDIR) || !is_writable($DestDIR)){
				mkdir($DestDIR);
			}
			
			move_uploaded_file($_FILES['img']['tmp_name'], $DestDIR.'/1.jpg');
		}

		$data = [
			'image' => $_FILES['img']['name'],
		];

		$_SESSION['image'] = $_FILES['img']['name'];

		$model->update($_SESSION['user_id'], $data);
		
		echo '<script>alert("照片上傳成功！")</script>';
		return view('show/set_face_id');
	}

	public function del_img()
	{
		$model = new Post_user_login();

		$user = $model->find($_SESSION['user_id']);

		if($user['image'] != NULL){
			$file = 'labeled_images/'.$_SESSION['user_id'].'/1.jpg';
			unlink($file);
			$DestDIR = "labeled_images/".$_SESSION['user_id'];
			rmdir($DestDIR);
		}
		
		$data = [
			'image' => NULL,
		];

		$_SESSION['image'] = NULL;

		$model->update($_SESSION['user_id'], $data);

		echo '<script>alert("已取消 Face ID 功能！")</script>';
		return view('show/set_face_id');
	}

	public function logindateset()
	{
		if(!isset($_SESSION['user_login']) || $_SESSION['user_login'] != true){
			echo '<script>alert("請先登入！")</script>';
			return view('login/user_login');
		}

		$model = new Logindate();
		$data =
			[
				'logindate' => $model->findall()
			];
		return view('control/logindateset',$data);
	}

	public function logindateview()
	{
		if(!isset($_SESSION['user_login']) || $_SESSION['user_login'] != true){
			echo '<script>alert("請先登入！")</script>';
			return view('login/user_login');
		}

		$model = new Logindate();
		$data =
			[
				'logindate' => $model->findall()
			];
		return view('control/logindateview',$data);
	}
		/*後台網頁開放時間網址與說明資料更新*/
	public function logindatestore()
	{
		if(!isset($_SESSION['user_login']) || $_SESSION['user_login'] != true){
			echo '<script>alert("請先登入！")</script>';
			return view('login/user_login');
		}

		$model = new Logindate();
		$model->save(
			[
				'id'		=> 1,
				'start1'	 => $this->request->getVar('start1'),
				'end1' => $this->request->getVar('end1')
			]
		);
		return redirect('loginController/logindateview');
	}

	/* 後台登入頁面 */
	public function user_login()
	{
		if(isset($_GET['value'])){
			echo '<script>alert("身份驗證失敗，請重新再試！")</script>';
		}

		if(!isset($_SESSION['user_login']) || $_SESSION['user_login'] != true){
			return view('login/user_login');
		}
		else{
			echo '<script>alert("'.$_SESSION['user_name'].' 您好 !")</script>';
			return view('posts/create_new');
		}
	}

	/* 前台登入頁面 */
	public function login()
	{
		$login = new Logindate();

		$time = $login->findAll();

		if (strtotime($time[0]['start1'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($time[0]['end1']))
			return view('login/login');
		else{
			return view('login/loginclose');
		}
	}

	/* 忘記密碼頁面 */
	public function forget()
	{
		return view('login/forget');
	}

	/* 更改密碼頁面 */
	public function change_password()
	{
		if(!isset($_SESSION['change_password']) || $_SESSION['change_password'] != true){
			echo '<script>alert("請輸入帳號及電子郵件！")</script>';
			return view('login/forget');
		}

		return view('login/change_password');
	}

	/* 後台登出頁面 */
	public function user_logout()
	{
		echo '<script>alert("已登出！")</script>';
		unset($_SESSION['user_name']);
		unset($_SESSION['user_login']);
		return view('login/user_login');
	}

	/* 前台登出頁面 */
	public function logout()
	{
		echo '<script>alert("已登出！")</script>';
		unset($_SESSION['name']);
		unset($_SESSION['login']);
		return view('login/login');
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
			return view('login/user_login');
		}

		$model = new Post_user_login(); //開啟 user_account 資料庫
		
		$users = $model->findAll(); //取得資料
		
		/* 檢查是否匹配帳號 */
		for($i = 0; isset($users[$i]); $i++)
		{
			$email = strcmp($data['email'], $users[$i]['email']);
			$password = strcmp($data['password'], $users[$i]['password']);

			if($email == 0 && $password == 0){
				$_SESSION['user_name'] = $users[$i]['name'];
				$_SESSION['user_id'] = $users[$i]['id'];
				$_SESSION['user_login'] = true;
				return view('posts/create_new');
			}
			else if($email == 0 && $password != 0){
				$_SESSION['user_login'] = false;
				echo '<script>alert("密碼輸入錯誤，請重新登入！")</script>';
				return view('login/user_login');
			}
		}
		
		$_SESSION['user_login'] = false;
		echo '<script>alert("帳號輸入錯誤，請重新登入！")</script>';
		return view('login/user_login');
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
			return view('login/login');
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
				$_SESSION['name'] = $users[$i]['name'];
				$_SESSION['login'] = true;
				if(!isset($_SESSION['login_type']) || $_SESSION['login_type'] == 'star'){
					return redirect('viewController/show_front_star');
				}
				else if($_SESSION['login_type'] == 'per'){
					return redirect('viewController/show_front_per');
				}
			}
			else if($account == 0 && $password != 0){
				$_SESSION['login'] = false;
				echo '<script>alert("密碼輸入錯誤，請重新登入！")</script>';
				return view('login/login');
			}
		}

		if($check == 0){
			$_SESSION['login'] = false;
			echo '<script>alert("帳號輸入錯誤，請重新登入！")</script>';
			return view('login/login');
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
			return view('login/forget');
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
				$_SESSION['account_id'] = $i + 1;
				echo '<script>alert("帳號驗證成功，請設定新的密碼！")</script>';
				$_SESSION['change_password'] = true;
				return view('login/change_password');
			}
			else if($account == 0 && $email != 0){
				echo '<script>alert("電子郵件輸入錯誤，請重新輸入！")</script>';
				$_SESSION['change_password'] = false;
				return view('login/forget');
			}
		}

		$_SESSION['change_password'] = false;
		echo '<script>alert("帳號輸入錯誤，請重新輸入！")</script>';
		return view('login/forget');
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
			return view('login/change_password');
		}

		$same = strcmp($data['password'], $data['check']);

		if($same == 0)
		{
			$model = new Post_login(); //開啟 account 資料庫

			$model->save([
				'id' => $_SESSION['account_id'],
				'account' => $_SESSION['account'],
				'password' => $data['password'],
				'email' => $_SESSION['email']
			]);

			echo '<script>alert("更改密碼成功，跳轉回登入頁面！")</script>';
			unset($_SESSION['account_id']);
			unset($_SESSION['account']);
			unset($_SESSION['email']);
			return view('login/login');
		}
		else{
			echo '<script>alert("兩次密碼不一致，請重新輸入！")</script>';
			return view('login/change_password');
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
?>