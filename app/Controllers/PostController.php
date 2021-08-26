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

class PostController extends BaseController
{
	public function index()
	{
		return view('show/frontpage');
	}

	public function test()
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
		return view('show/test', $data);
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

	/*顯示關閉頁面*/
	public function pageclose()
	{
		return view('show/pageclose');
	}

	/*創建新的貼文入口頁面*/
	public function create_new()
	{
		if(isset($_GET['id'])){
			$model = new Post_user_login(); //開啟 user_account 資料庫
			$user = $model->find($_GET['id']); //取得資料

			$_SESSION['user_id'] = $_GET['id'];
			if($user['image'] != NULL){
				$_SESSION['image'] = $user['image'];
			}
			else{
				$_SESSION['image'] = NULL;
			}
			$_SESSION['user_login'] = true;
			$_SESSION['user_name'] = $user['name'];
			unset($_GET['id']);
		}

		if(!isset($_SESSION['user_login']) || $_SESSION['user_login'] != true){
			echo '<script>alert("請先登入！")</script>';
			return view('login/user_login');
		}
		return view('posts/create_new');
	}

	/*創建新的貼文(繁星)*/
	public function create_star()
	{
		if(!isset($_SESSION['user_login']) || $_SESSION['user_login'] != true){
			echo '<script>alert("請先登入！")</script>';
			return view('login/user_login');
		}
		return view('posts/create_star');
	}

	/*創建新的貼文(個申)*/
	public function create_per()
	{
		if(!isset($_SESSION['user_login']) || $_SESSION['user_login'] != true){
			echo '<script>alert("請先登入！")</script>';
			return view('login/user_login');
		}
		return view('posts/create_per');
	}

	/*修改貼文(繁星)*/
	public function modify_star()
	{
		if(!isset($_SESSION['user_login']) || $_SESSION['user_login'] != true){
			echo '<script>alert("請先登入！")</script>';
			return view('login/user_login');
		}

		$model = new Star_post_page();

		$data = [
			'post' => $model->find($_SESSION['id'])
		];

		return view('posts/modify_star', $data);
	}

	/*修改貼文(個申)*/
	public function modify_per()
	{
		if(!isset($_SESSION['user_login']) || $_SESSION['user_login'] != true){
			echo '<script>alert("請先登入！")</script>';
			return view('login/user_login');
		}

		$model = new Per_post_page();

		$data = [
			'post' => $model->find($_SESSION['id'])
		];

		return view('posts/modify_per', $data);
	}

	/*後台顯示公告的文章*/
	public function show_back()
	{
		if(!isset($_SESSION['user_login']) || $_SESSION['user_login'] != true){
			echo '<script>alert("請先登入！")</script>';
			return view('login/user_login');
		}
		
		$model1 = new Star_post_page();
		$model2 = new Per_post_page();
		$data = 
		[
			'star_post_page' => $model1->orderBy('start', 'desc')->findAll(),
			'per_post_page' => $model2->orderBy('start', 'desc')->findAll()
		];
		return view('show/show_back', $data);
	}

	/* 前台分頁公告(繁星) */
	public function star_page($num){
		$login = new Logindate();
		$model = new Star_post_page();
		$starsenior = new Starsenior();
		$starcollege = new Starcollege();

		$data = [
			'star_post_page' => $model->orderBy('start', 'desc')->findAll()
		];

		$i = 0;
		$j = 0;

		while(isset($data['star_post_page'][$j])){
			if(strtotime($data['star_post_page'][$j]['start'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($data['star_post_page'][$j]['end'])){
				$i++;
			}
			$j++;
		}

		if($i <= 10){
			$page_num = 1;
		}
		else{
			$page_num = (int)($i / 10) + 1;
			if($i % 10 == 0){
				$page_num--;
			}
		}
		
		$dist = ($num - 1) * 10;

		$i = 0;
		$j = 0;

		while(isset($data['star_post_page'][$j])){
			if(strtotime($data['star_post_page'][$j]['start'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($data['star_post_page'][$j]['end'])){
				if($i == $dist){
					break;
				}
				$i++;
			}
			$j++;
		}

		$_SESSION['head'] = $j;
		$_SESSION['tail'] = $j + 9;

		$data = 
		[
			'starcollege' => $starcollege->findAll(),
			'starsenior' => $starsenior->findAll(),
			'logindate'=> $login->findAll(),
			'star_post_page' => $model->orderBy('start', 'desc')->findAll(),
			'page_num' => $page_num,
		];

		return view('show/show_front_star', $data);
	}

	/* 前台全部公告(繁星) */
	public function star_page_all(){
		$login = new Logindate();
		$model = new Star_post_page();
		$starsenior = new Starsenior();
		$starcollege = new Starcollege();

		$data = [
			'star_post_page' => $model->orderBy('start', 'desc')->findAll()
		];

		$i = 0;
		$j = 0;

		while(isset($data['star_post_page'][$j])){
			if(strtotime($data['star_post_page'][$j]['start'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($data['star_post_page'][$j]['end'])){
				$i++;
			}
			$j++;
		}

		if($i <= 10){
			$page_num = 1;
		}
		else{
			$page_num = (int)($i / 10) + 1;
			if($i % 10 == 0){
				$page_num--;
			}
		}
		
		$_SESSION['head'] = 0;
		$_SESSION['tail'] = $i;

		$data = 
		[
			'starcollege' => $starcollege->findAll(),
			'starsenior' => $starsenior->findAll(),
			'logindate'=> $login->findAll(),
			'star_post_page' => $model->orderBy('start', 'desc')->findAll(),
			'page_num' => $page_num,
		];

		return view('show/show_front_star', $data);
	}

	/*顯示前台繁星公告的文章*/
	public function show_front_star()
	{
		$login = new Logindate();
		$model = new Star_post_page();
		$starsenior = new Starsenior();
		$starcollege = new Starcollege();

		$data = [
			'star_post_page' => $model->orderBy('start', 'desc')->findAll()
		];

		$i = 0;
		$j = 0;

		while(isset($data['star_post_page'][$j])){
			if(strtotime($data['star_post_page'][$j]['start'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($data['star_post_page'][$j]['end'])){
				$i++;
			}
			$j++;
		}

		if($i <= 10){
			$page_num = 1;
		}
		else{
			$page_num = (int)($i / 10) + 1;
			if($i % 10 == 0){
				$page_num--;
			}
		}

		$_SESSION['head'] = 0;
		$_SESSION['tail'] = 9;

		$data = 
		[
			'starcollege' => $starcollege->findAll(),
			'starsenior' => $starsenior->findAll(),
			'logindate'=> $login->findAll(),
			'star_post_page' => $model->orderBy('start', 'desc')->findAll(),
			'page_num' => $page_num,
		];

		return view('show/show_front_star', $data);
	}

	/* 前台公告類型(繁星) */
	public function star_page_type($type){
		$login = new Logindate();
		$model = new Star_post_page();
		$starsenior = new Starsenior();
		$starcollege = new Starcollege();

		$data = [
			'star_post_page' => $model->orderBy('start', 'desc')->findAll()
		];

		$i = 0;
		$j = 0;

		while(isset($data['star_post_page'][$j])){
			if(strtotime($data['star_post_page'][$j]['start'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($data['star_post_page'][$j]['end'])){
				$i++;
			}
			$j++;
		}

		if($i <= 10){
			$page_num = 1;
		}
		else{
			$page_num = (int)($i / 10) + 1;
			if($i % 10 == 0){
				$page_num--;
			}
		}
		
		$_SESSION['head'] = 0;
		$_SESSION['tail'] = $i;

		$data = 
		[
			'starcollege' => $starcollege->findAll(),
			'starsenior' => $starsenior->findAll(),
			'logindate'=> $login->findAll(),
			'star_post_page' => $model->orderBy('start', 'desc')->findAll(),
			'post_type' => $type
		];

		return view('show/show_front_star', $data);
	}

	/* 前台分頁公告(個申) */
	public function per_page($num){
		$login = new Logindate();
		$model = new Per_post_page();
		$norsenior = new Norsenior();
		$norcollege = new Norcollege();

		$data = [
			'per_post_page' => $model->orderBy('start', 'desc')->findAll()
		];

		$i = 0;
		$j = 0;

		while(isset($data['per_post_page'][$j])){
			if(strtotime($data['per_post_page'][$j]['start'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($data['per_post_page'][$j]['end'])){
				$i++;
			}
			$j++;
		}

		if($i <= 10){
			$page_num = 1;
		}
		else{
			$page_num = (int)($i / 10) + 1;
			if($i % 10 == 0){
				$page_num--;
			}
		}
		
		$dist = ($num - 1) * 10;

		$i = 0;
		$j = 0;
		
		while(isset($data['per_post_page'][$j])){
			if(strtotime($data['per_post_page'][$j]['start'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($data['per_post_page'][$j]['end'])){
				if($i == $dist){
					break;
				}
				$i++;
			}
			$j++;
		}

		$_SESSION['head'] = $j;
		$_SESSION['tail'] = $j + 9;

		$data = 
		[
			'norcollege' => $norcollege->findAll(),
			'norsenior' => $norsenior->findAll(),
			'logindate'=> $login->findAll(),
			'per_post_page' => $model->orderBy('start', 'desc')->findAll(),
			'page_num' => $page_num,
		];

		return view('show/show_front_per', $data);
	}

	/* 前台全部公告(個申) */
	public function per_page_all(){
		$login = new Logindate();
		$model = new Per_post_page();
		$norsenior = new Norsenior();
		$norcollege = new Norcollege();

		$data = [
			'per_post_page' => $model->orderBy('start', 'desc')->findAll()
		];

		$i = 0;
		$j = 0;

		while(isset($data['per_post_page'][$j])){
			if(strtotime($data['per_post_page'][$j]['start'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($data['per_post_page'][$j]['end'])){
				$i++;
			}
			$j++;
		}

		if($i <= 10){
			$page_num = 1;
		}
		else{
			$page_num = (int)($i / 10) + 1;
			if($i % 10 == 0){
				$page_num--;
			}
		}
		
		$_SESSION['head'] = 0;
		$_SESSION['tail'] = $i;

		$data = 
		[
			'norcollege' => $norcollege->findAll(),
			'norsenior' => $norsenior->findAll(),
			'logindate'=> $login->findAll(),
			'per_post_page' => $model->orderBy('start', 'desc')->findAll(),
			'page_num' => $page_num,
		];

		return view('show/show_front_per', $data);
	}

	/*顯示前台個申公告的文章*/
	public function show_front_per()
	{
		$login = new Logindate();
		$model = new Per_post_page();
		$norsenior = new Norsenior();
		$norcollege = new Norcollege();

		$data = [
			'per_post_page' => $model->orderBy('start', 'desc')->findAll()
		];

		$i = 0;
		$j = 0;

		while(isset($data['per_post_page'][$j])){
			if(strtotime($data['per_post_page'][$j]['start'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($data['per_post_page'][$j]['end'])){
				$i++;
			}
			$j++;
		}

		if($i <= 10){
			$page_num = 1;
		}
		else{
			$page_num = (int)($i / 10) + 1;
			if($i % 10 == 0){
				$page_num--;
			}
		}

		$_SESSION['head'] = 0;
		$_SESSION['tail'] = 9;

		$data = 
		[
			'norcollege' => $norcollege->findAll(),
			'norsenior' => $norsenior->findAll(),
			'logindate'=> $login->findAll(),
			'per_post_page' => $model->orderBy('start', 'desc')->findAll(),
			'page_num' => $page_num,
		];

		return view('show/show_front_per', $data);
	}

	/* 前台公告類型(個申) */
	public function per_page_type($type){
		$login = new Logindate();
		$model = new Per_post_page();
		$norsenior = new Norsenior();
		$norcollege = new Norcollege();

		$data = [
			'per_post_page' => $model->orderBy('start', 'desc')->findAll()
		];

		$i = 0;
		$j = 0;

		while(isset($data['per_post_page'][$j])){
			if(strtotime($data['per_post_page'][$j]['start'])<strtotime(date("Y-m-d H:i:s")) && strtotime(date("Y-m-d H:i:s"))<strtotime($data['per_post_page'][$j]['end'])){
				$i++;
			}
			$j++;
		}

		if($i <= 10){
			$page_num = 1;
		}
		else{
			$page_num = (int)($i / 10) + 1;
			if($i % 10 == 0){
				$page_num--;
			}
		}
		
		$_SESSION['head'] = 0;
		$_SESSION['tail'] = $i;

		$data = 
		[
			'norcollege' => $norcollege->findAll(),
			'norsenior' => $norsenior->findAll(),
			'logindate'=> $login->findAll(),
			'per_post_page' => $model->orderBy('start', 'desc')->findAll(),
			'post_type' => $type
		];

		return view('show/show_front_per', $data);
	}

	/*後台點選進入文章內容(繁星)*/
	public function show_content_back_star($star_post_page_id)
	{
		if(!isset($_SESSION['user_login']) || $_SESSION['user_login'] != true){
			echo '<script>alert("請先登入！")</script>';
			return view('login/user_login');
		}

		$login = new Logindate();
		$model = new Star_post_page();
		$data = 
		[
			'logindate'=> $login->findAll(),
			'star_post_page' => $model->find($star_post_page_id)
		];
		$_SESSION['id'] = $star_post_page_id;
		return view('show/show_content_back_star', $data);
	}

	/*後台點選進入文章內容(個申)*/
	public function show_content_back_per($per_post_page_id)
	{
		if(!isset($_SESSION['user_login']) || $_SESSION['user_login'] != true){
			echo '<script>alert("請先登入！")</script>';
			return view('login/user_login');
		}

		$login = new Logindate();
		$model = new Per_post_page();
		$data = 
		[
			'logindate'=> $login->findAll(),
			'per_post_page' => $model->find($per_post_page_id)
		];
		$_SESSION['id'] = $per_post_page_id;
		return view('show/show_content_back_per', $data);
	}

	/*前台點選進入文章內容(繁星)*/
	public function show_content_front_star($star_post_page_id)
	{
		$login = new Logindate();
		$model = new Star_post_page();
		$starsenior = new Starsenior();
		$starcollege = new Starcollege();

		$data = 
		[
			'starsenior' => $starsenior->findAll(),
			'starcollege' => $starcollege->findAll(),
			'logindate'=> $login->findAll(),
			'star_post_page' => $model->find($star_post_page_id)
		];
		return view('show/show_content_front_star', $data);
	}

	/*前台點選進入文章內容(個申)*/
	public function show_content_front_per($per_post_page_id)
	{
		$login = new Logindate();
		$model = new Per_post_page();
		$norsenior = new Norsenior();
		$norcollege = new Norcollege();

		$data = 
		[
			'norsenior' => $norsenior->findAll(),
			'norcollege' => $norcollege->findAll(),
			'logindate'=> $login->findAll(),
			'per_post_page' => $model->find($per_post_page_id)
		];
		return view('show/show_content_front_per', $data);
	}

	/*顯示pdf*/
	public function show_pdf($file_name)
	{
		$this->response->setHeader('Content-Type', 'application/pdf');
		readfile("upload/".$file_name);
	}

	/*儲存文章頁面(繁星)*/
	public function store_star()
	{
		if(!isset($_SESSION['user_login']) || $_SESSION['user_login'] != true){
			echo '<script>alert("請先登入！")</script>';
			return view('login/user_login');
		}

		$data=
		[
			'title' => $this->request->getVar('title'),
			'subtitle' => $this->request->getVar('subtitle'),
			'subtitle2' => $this->request->getVar('subtitle2'),
			'content' => $this->request->getVar('content'),
			'start' => $this->request->getVar('start'),
			'end' => $this->request->getVar('end')
		];
	
		if($_FILES['myfile']['error'] > 0 ) {
			switch ($_FILES['myfile']['error'] ) {
			case 1:die("檔案大小超出 php.ini:upload_max_filesize 限制 ");
			case 2:die("檔案大小超出 MAX_FILE_SIZE 限制");
			case 3:die("檔案大小僅被部份上傳");
			}
		}

		if(is_uploaded_file($_FILES['myfile']['tmp_name'])){	
			$DestDIR = "upload";
			if(!is_dir($DestDIR) || !is_writable($DestDIR)){
				die("目錄不存在或無法存取檔案");
			}

			$File_Extension = explode(".", $_FILES['myfile']['name']);
			$File_Extension = $File_Extension[count($File_Extension)-1];
			$ServerFilename = date("YmdHis").".".$File_Extension;
			move_uploaded_file($_FILES['myfile']['tmp_name'], $DestDIR.'/'.$ServerFilename);

			$model = new Star_post_page();
			$model->save([
				'title' => $data['title'],
				'subtitle' => $data['subtitle'],
				'subtitle2' => $data['subtitle2'],
				'content' => $data['content'],
				'start' => $data['start'],
				'end' => $data['end'],
				'file' => $ServerFilename,
				'file_name' => $_FILES['myfile']['name']
			]);
			return redirect('PostController/show_back');
		}

		$model = new Star_post_page();
		$model->save([
			'title' => $data['title'],
			'subtitle' => $data['subtitle'],
			'subtitle2' => $data['subtitle2'],
			'content' => $data['content'],
			'start' => $data['start'],
			'end' => $data['end']
		]);
		return redirect('PostController/show_back');
	}

	/*儲存文章頁面(個人)*/
	public function store_per()
	{
		if(!isset($_SESSION['user_login']) || $_SESSION['user_login'] != true){
			echo '<script>alert("請先登入！")</script>';
			return view('login/user_login');
		}

		$data=
			[
				'title' => $this->request->getVar('title'),
				'subtitle' => $this->request->getVar('subtitle'),
				'subtitle2' => $this->request->getVar('subtitle2'),
				'content' => $this->request->getVar('content'),
				'start' => $this->request->getVar('start'),
				'end' => $this->request->getVar('end')
			];

		if($_FILES['myfile']['error'] > 0 ) {
			switch ($_FILES['myfile']['error'] ) {
			case 1:die("檔案大小超出 php.ini:upload_max_filesize 限制 ");
			case 2:die("檔案大小超出 MAX_FILE_SIZE 限制");
			case 3:die("檔案大小僅被部份上傳");
			}
		}

		if(is_uploaded_file($_FILES['myfile']['tmp_name'])){	
			$DestDIR = "upload";
			if(!is_dir($DestDIR) || !is_writable($DestDIR)){
				die("目錄不存在或無法存取檔案");
			}

			$File_Extension = explode(".", $_FILES['myfile']['name']);
			$File_Extension = $File_Extension[count($File_Extension)-1];
			$ServerFilename = date("YmdHis").".".$File_Extension;
			move_uploaded_file($_FILES['myfile']['tmp_name'], $DestDIR.'/'.$ServerFilename);

			$model = new Per_post_page();
			$model->save([
				'title' => $data['title'],
				'subtitle' => $data['subtitle'],
				'subtitle2' => $data['subtitle2'],
				'content' => $data['content'],
				'start' => $data['start'],
				'end' => $data['end'],
				'file' => $ServerFilename,
				'file_name' => $_FILES['myfile']['name']
			]);
			return redirect('PostController/show_back');
		}	

		$model = new Per_post_page();
		$model->save([
			'title' => $data['title'],
			'subtitle' => $data['subtitle'],
			'subtitle2' => $data['subtitle2'],
			'content' => $data['content'],
			'start' => $data['start'],
			'end' => $data['end']
		]);
		return redirect('PostController/show_back');
	}

	/*修改後儲存文章頁面(繁星)*/
	public function restore_star()
	{
		if(!isset($_SESSION['user_login']) || $_SESSION['user_login'] != true){
			echo '<script>alert("請先登入！")</script>';
			return view('login/user_login');
		}

		$data=
			[
				'title' => $this->request->getVar('title'),
				'subtitle' => $this->request->getVar('subtitle'),
				'subtitle2' => $this->request->getVar('subtitle2'),
				'content' => $this->request->getVar('content'),
				'start' => $this->request->getVar('start'),
				'end' => $this->request->getVar('end')
			];

		if($_FILES['myfile']['error'] > 0 ) {
			switch ($_FILES['myfile']['error'] ) {
			case 1:die("檔案大小超出 php.ini:upload_max_filesize 限制 ");
			case 2:die("檔案大小超出 MAX_FILE_SIZE 限制");
			case 3:die("檔案大小僅被部份上傳");
			}
		}

		if(is_uploaded_file($_FILES['myfile']['tmp_name'])){	
			$DestDIR = "upload";
			if(!is_dir($DestDIR) || !is_writable($DestDIR)){
				die("目錄不存在或無法存取檔案");
			}

			$File_Extension = explode(".", $_FILES['myfile']['name']);
			$File_Extension = $File_Extension[count($File_Extension)-1];
			$ServerFilename = date("YmdHis").".".$File_Extension;
			move_uploaded_file($_FILES['myfile']['tmp_name'], $DestDIR.'/'.$ServerFilename);

			$model = new Star_post_page();
			$model->save([
				'id' => $_SESSION['id'],
				'title' => $data['title'],
				'subtitle' => $data['subtitle'],
				'subtitle2' => $data['subtitle2'],
				'content' => $data['content'],
				'start' => $data['start'],
				'end' => $data['end'],
				'file' => $ServerFilename,
				'file_name' => $_FILES['myfile']['name']
			]);
			return redirect('PostController/show_back');
		}	

		$model = new Star_post_page();

		$post = $model->find($_SESSION['id']);

		if($post['file'] != NULL){
			$file = 'upload/'.$post['file'];
			unlink($file);
		}
		
		$model->save([
			'id' => $_SESSION['id'],
			'title' => $data['title'],
			'subtitle' => $data['subtitle'],
			'subtitle2' => $data['subtitle2'],
			'content' => $data['content'],
			'start' => $data['start'],
			'end' => $data['end']
		]);

		unset($_SESSION['id']);
		return redirect('PostController/show_back');
	}

	/*修改後儲存文章頁面(個人)*/
	public function restore_per()
	{
		if(!isset($_SESSION['user_login']) || $_SESSION['user_login'] != true){
			echo '<script>alert("請先登入！")</script>';
			return view('login/user_login');
		}

		$data=
			[
				'title' => $this->request->getVar('title'),
				'subtitle' => $this->request->getVar('subtitle'),
				'subtitle2' => $this->request->getVar('subtitle2'),
				'content' => $this->request->getVar('content'),
				'start' => $this->request->getVar('start'),
				'end' => $this->request->getVar('end')
			];
		
		if($_FILES['myfile']['error'] > 0 ) {
			switch ($_FILES['myfile']['error'] ) {
			case 1:die("檔案大小超出 php.ini:upload_max_filesize 限制 ");
			case 2:die("檔案大小超出 MAX_FILE_SIZE 限制");
			case 3:die("檔案大小僅被部份上傳");
			}
		}

		if(is_uploaded_file($_FILES['myfile']['tmp_name'])){
			$DestDIR = "upload";
			if(!is_dir($DestDIR) || !is_writable($DestDIR)){
				die("目錄不存在或無法存取檔案");
			}

			$File_Extension = explode(".", $_FILES['myfile']['name']);
			$File_Extension = $File_Extension[count($File_Extension)-1];
			$ServerFilename = date("YmdHis").".".$File_Extension;
			move_uploaded_file($_FILES['myfile']['tmp_name'], $DestDIR.'/'.$ServerFilename);

			$model = new Per_post_page();

			$post = $model->find($_SESSION['id']);

			if($post['file'] != NULL){
				$file = 'upload/'.$post['file'];
				unlink($file);
			}

			$model->save([
				'id' => $_SESSION['id'],
				'title' => $data['title'],
				'subtitle' => $data['subtitle'],
				'subtitle2' => $data['subtitle2'],
				'content' => $data['content'],
				'start' => $data['start'],
				'end' => $data['end'],
				'file' => $ServerFilename,
				'file_name' => $_FILES['myfile']['name']
			]);
			return redirect('PostController/show_back');
		}	

		$model = new Per_post_page();
		$model->save([
			'id' => $_SESSION['id'],
			'title' => $data['title'],
			'subtitle' => $data['subtitle'],
			'subtitle2' => $data['subtitle2'],
			'content' => $data['content'],
			'start' => $data['start'],
			'end' => $data['end']
		]);

		unset($_SESSION['id']);
		return redirect('PostController/show_back');
	}

	/*刪除資料(繁星)*/
	public function delete_star()
	{
		if(!isset($_SESSION['user_login']) || $_SESSION['user_login'] != true){
			echo '<script>alert("請先登入！")</script>';
			return view('login/user_login');
		}

		$model = new Star_post_page();

		$post = $model->find($_SESSION['id']);

		if($post['file'] != NULL){
			$file = 'upload/'.$post['file'];
			unlink($file);
		}
		
		$model->where('id', $_SESSION['id'])->delete();

		echo '<script>alert("公告已刪除！")</script>';

		return redirect('PostController/show_back');
	}

	/*刪除資料(個人)*/
	public function delete_per()
	{
		if(!isset($_SESSION['user_login']) || $_SESSION['user_login'] != true){
			echo '<script>alert("請先登入！")</script>';
			return view('login/user_login');
		}

		$model = new Per_post_page();

		$post = $model->find($_SESSION['id']);

		if($post['file'] != NULL){
			$file = 'upload/'.$post['file'];
			unlink($file);
		}
		
		$model->where('id', $_SESSION['id'])->delete();

		echo '<script>alert("公告已刪除！")</script>';

		return redirect('PostController/show_back');
	}

	/*編輯頁面*/
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

	public function norcollegeedit()
	{
		if(!isset($_SESSION['user_login']) || $_SESSION['user_login'] != true){
			echo '<script>alert("請先登入！")</script>';
			return view('login/user_login');
		}
		
		$model = new Norcollege();
		$data =
			[
				'norcollege' => $model->findall()
			];
		return view('control/norcollegeedit',$data);
	}

	public function starcollegeedit()
	{
		if(!isset($_SESSION['user_login']) || $_SESSION['user_login'] != true){
			echo '<script>alert("請先登入！")</script>';
			return view('login/user_login');
		}
		
		$model = new Starcollege();
		$data =
			[
				'starcollege' => $model->findall()
			];
		return view('control/starcollegeedit',$data);
	}

	public function norsenioredit()
	{
		if(!isset($_SESSION['user_login']) || $_SESSION['user_login'] != true){
			echo '<script>alert("請先登入！")</script>';
			return view('login/user_login');
		}
		
		$model = new Norsenior();
		$data =
			[
				'norsenior' => $model->findall()
			];
		return view('control/norsenioredit',$data);
	}

	public function starsenioredit()
	{
		if(!isset($_SESSION['user_login']) || $_SESSION['user_login'] != true){
			echo '<script>alert("請先登入！")</script>';
			return view('login/user_login');
		}

		$model = new Starsenior();
		$data =
			[
				'starsenior' => $model->findall()
			];
		return view('control/starsenioredit',$data);
	}

	/*編輯畫面跳轉到觀看畫面*/
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

	public function norcollegeview()
	{
		if(!isset($_SESSION['user_login']) || $_SESSION['user_login'] != true){
			echo '<script>alert("請先登入！")</script>';
			return view('login/user_login');
		}

		$model = new Norcollege();
		$data =
			[
				'norcollege' => $model->findall()
			];
		return view('control/norcollegeview',$data);
	}

	public function starcollegeview()
	{
		if(!isset($_SESSION['user_login']) || $_SESSION['user_login'] != true){
			echo '<script>alert("請先登入！")</script>';
			return view('login/user_login');
		}

		$model = new Starcollege();
		$data =
			[
				'starcollege' => $model->findall()
			];
		return view('control/starcollegeview',$data);
	}

	public function norseniorview()
	{
		if(!isset($_SESSION['user_login']) || $_SESSION['user_login'] != true){
			echo '<script>alert("請先登入！")</script>';
			return view('login/user_login');
		}

		$model = new Norsenior();
		$data =
			[
				'norsenior' => $model->findall()
			];
		return view('control/norseniorview',$data);
	}

	public function starseniorview()
	{
		if(!isset($_SESSION['user_login']) || $_SESSION['user_login'] != true){
			echo '<script>alert("請先登入！")</script>';
			return view('login/user_login');
		}

		$model = new Starsenior();
		$data =
			[
				'starsenior' => $model->findall()
			];
		return view('control/starseniorview',$data);
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
		return redirect('PostController/logindateview');
	}

	public function norcollegestore()
	{
		if(!isset($_SESSION['user_login']) || $_SESSION['user_login'] != true){
			echo '<script>alert("請先登入！")</script>';
			return view('login/user_login');
		}
		
		$model = new Norcollege();
		$model->save(
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
		]);

		return redirect('PostController/norcollegeview');
	}

	public function starcollegestore()
	{
		if(!isset($_SESSION['user_login']) || $_SESSION['user_login'] != true){
			echo '<script>alert("請先登入！")</script>';
			return view('login/user_login');
		}

		$model = new Starcollege();
		$model->save(
		[
				'id'	=> 1,
				'start1' => $this->request->getVar('start1'),	'end1' => $this->request->getVar('end1'),	'website1' => $this->request->getVar('website1'),	'instruction1' => $this->request->getVar('instruction1'),
				'start2' => $this->request->getVar('start2'),	'end2' => $this->request->getVar('end2'),	'website2' => $this->request->getVar('website2'),	'instruction2' => $this->request->getVar('instruction2'),
				'start3' => $this->request->getVar('start3'),	'end3' => $this->request->getVar('end3'),	'website3' => $this->request->getVar('website3'),	'instruction3' => $this->request->getVar('instruction3'),
				'start4' => $this->request->getVar('start4'),	'end4' => $this->request->getVar('end4'),	'website4' => $this->request->getVar('website4'),	'instruction4' => $this->request->getVar('instruction4'),
				'start5' => $this->request->getVar('start5'),	'end5' => $this->request->getVar('end5'),	'website5' => $this->request->getVar('website5'),	'instruction5' => $this->request->getVar('instruction5'),
				'start6' => $this->request->getVar('start6'),	'end6' => $this->request->getVar('end6'),	'website6' => $this->request->getVar('website6'),	'instruction6' => $this->request->getVar('instruction6'),
				'start7' => $this->request->getVar('start7'),	'end7' => $this->request->getVar('end7'),	'website7' => $this->request->getVar('website7'),	'instruction7' => $this->request->getVar('instruction7')
		]);
		return redirect('PostController/starcollegeview');
	}

	public function norseniorstore()
	{
		if(!isset($_SESSION['user_login']) || $_SESSION['user_login'] != true){
			echo '<script>alert("請先登入！")</script>';
			return view('login/user_login');
		}

		$model = new Norsenior();
		$model->save(
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
				'start18' => $this->request->getVar('start18'),	'end18' => $this->request->getVar('end18'),	'website18' => $this->request->getVar('website18'),	'instruction18' => $this->request->getVar('instruction18')
		]);
		return redirect('PostController/norseniorview');	
	}

	public function starseniorstore()
	{
		if(!isset($_SESSION['user_login']) || $_SESSION['user_login'] != true){
			echo '<script>alert("請先登入！")</script>';
			return view('login/user_login');
		}
		
		$model = new Starsenior();
		$model->save(
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
				'start15' => $this->request->getVar('start15'),	'end15' => $this->request->getVar('end15'),	'website15' => $this->request->getVar('website15'),	'instruction15' => $this->request->getVar('instruction15')
		]);
		return redirect('PostController/starseniorview');	
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
	public function login($type)
	{
		$login = new Logindate();

		$time = $login->findAll();

		$_SESSION['login_type'] = $type;

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
				if($_SESSION['login_type'] == 'star'){
					unset($_SESSION['login_type']);
					return redirect('PostController/show_front_star');
				}
				else if($_SESSION['login_type'] == 'per'){
					unset($_SESSION['login_type']);
					return redirect('PostController/show_front_per');
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