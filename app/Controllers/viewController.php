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

class viewController extends BaseController
{
	public function index()
	{
		return view('show/frontpage');
	}

	/*顯示關閉頁面*/
	public function pageclose()
	{
		return view('show/pageclose');
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

		$_SESSION['login_type'] = 'star';

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

		$_SESSION['login_type'] = 'per';

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
}
?>