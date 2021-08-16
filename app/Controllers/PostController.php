<?php 

namespace App\Controllers;

session_start();

use App\Controllers\BaseController;
use App\Models\Post_user_login;
use App\Models\Post_login;
use App\Models\Post_post_page;
use App\Models\Date;

class PostController extends BaseController
{
	public function index()
	{
		return view('posts/index');
	}

	/*創建新的貼文*/
	public function create()
	{
		return view('posts/create');
	}

	/*顯示公告的文章*/
	public function show()
	{
		$model = new Post_post_page();
		$data = 
		[
			'post_page' => $model->findAll()
		];
		return view('posts/show', $data);
	}

	/*顯示文章內容*/
	public function show_content($post_page_id)
	{
		$model = new Post_post_page();
		$data = 
		[
			'post_page' => $model->find($post_page_id)
		];
		return view('posts/show_content', $data);
	}

	/*儲存文章頁面*/
	public function store()
	{
		$data=
			[
				'title' => $this->request->getVar('title'),
				'subtitle' => $this->request->getVar('subtitle'),
				'subtitle2' => $this->request->getVar('subtitle2'),
				'content' => $this->request->getVar('content'),
				'start' => $this->request->getVar('start'),
				'end' => $this->request->getVar('end')
			];				

		$model = new Post_post_page();
		$model->save([
			'title' => $data['title'],
			'subtitle' => $data['subtitle'],
			'subtitle2' => $data['subtitle2'],
			'content' => $data['content'],
			'start' => substr($data['start'], 0, 10),
			'end' => substr($data['end'], 0, 10)
		]);
		return redirect('PostController');
	}

	/*編輯頁面*/
	public function dateedit()
	{
		
		$model = new Date();
		$data = [
				'date' => $model->findall()
			];
		return view('posts/dateedit',$data);
	}

	/*顯示關閉頁面*/
	public function pageclose()
	{
		return view('posts/pageclose');
	}

	/*編輯畫面跳轉到觀看畫面*/
	public function dateview()
	{
		$model = new Date();
		$data =
			[
				'date' => $model->findall()
			];
		return view('posts/dateview',$data);
	}

	/*後台網頁開放時間網址與說明資料更新*/
	public function norcollegestore()
	{	
		$date=
			[
				'id'	=> 1,
				'start1' => $this->request->getVar('start1'),	'end1' => $this->request->getVar('end1'),	'website1' => $this->request->getVar('website1'),	'instruction1' => $this->request->getVar('instruction1'),
				'start2' => $this->request->getVar('start2'),	'end2' => $this->request->getVar('end2'),	'website2' => $this->request->getVar('website2'),	'instruction2' => $this->request->getVar('instruction2'),
				'start3' => $this->request->getVar('start3'),	'end3' => $this->request->getVar('end3'),	'website3' => $this->request->getVar('website3'),	'instruction3' => $this->request->getVar('instruction3'),
				'start4' => $this->request->getVar('start4'),	'end4' => $this->request->getVar('end4'),	'website4' => $this->request->getVar('website4'),	'instruction4' => $this->request->getVar('instruction4'),
				'start5' => $this->request->getVar('start5'),	'end5' => $this->request->getVar('end5'),	'website5' => $this->request->getVar('website5'),	'instruction5' => $this->request->getVar('instruction5'),
				'start6' => $this->request->getVar('start6'),	'end6' => $this->request->getVar('end6'),	'website6' => $this->request->getVar('website6'),	'instruction6' => $this->request->getVar('instruction6'),
				'start7' => $this->request->getVar('start7'),	'end7' => $this->request->getVar('end7'),	'website7' => $this->request->getVar('website7'),	'instruction7' => $this->request->getVar('instruction7'),
				'start8' => $this->request->getVar('start8'),	'end8' => $this->request->getVar('end8'),	'website8' => $this->request->getVar('website8'),	'instruction8' => $this->request->getVar('instruction8'),
				'start9' => $this->request->getVar('start9'),	'end9' => $this->request->getVar('end9'),	'website9' => $this->request->getVar('website9'),	'instruction9' => $this->request->getVar('instruction9'),
				'start10' => $this->request->getVar('start10'),	'end10' => $this->request->getVar('end10'),	'website10' => $this->request->getVar('website10'),	'instruction10' => $this->request->getVar('instruction10'),
				'start11' => $this->request->getVar('start11'),	'end11' => $this->request->getVar('end11'),	'website11' => $this->request->getVar('website11'),	'instruction11' => $this->request->getVar('instruction11'),
				'start12' => $this->request->getVar('start12'),	'end12' => $this->request->getVar('end12'),	'website12' => $this->request->getVar('website12'),	'instruction12' => $this->request->getVar('instruction12'),
				'start13' => $this->request->getVar('start13'),	'end13' => $this->request->getVar('end13'),	'website13' => $this->request->getVar('website13'),	'instruction13' => $this->request->getVar('instruction13'),
				'start14' => $this->request->getVar('start14'),	'end14' => $this->request->getVar('end14'),	'website14' => $this->request->getVar('website14'),	'instruction14' => $this->request->getVar('instruction14'),
				'start15' => $this->request->getVar('start15'),	'end15' => $this->request->getVar('end15'),	'website15' => $this->request->getVar('website15'),	'instruction15' => $this->request->getVar('instruction15'),
				'start16' => $this->request->getVar('start16'),	'end16' => $this->request->getVar('end16'),	'website16' => $this->request->getVar('website16'),	'instruction16' => $this->request->getVar('instruction16'),
				'start17' => $this->request->getVar('start17'),	'end17' => $this->request->getVar('end17'),	'website17' => $this->request->getVar('website17'),	'instruction17' => $this->request->getVar('instruction17'),
				'start18' => $this->request->getVar('start18'),	'end18' => $this->request->getVar('end18'),	'website18' => $this->request->getVar('website18'),	'instruction18' => $this->request->getVar('instruction18'),
				'start19' => $this->request->getVar('start19'),	'end19' => $this->request->getVar('end19'),	'website19' => $this->request->getVar('website19'),	'instruction19' => $this->request->getVar('instruction19')
			];
		$model = new Date();
		$model->save($date);
		return redirect('dateview');	
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

	public function person_web()
	{
		return view('posts/person_web');
	}
	public function frontpage()
	{
		return view('posts/frontpage');
	}
}