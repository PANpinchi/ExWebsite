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

class starController extends BaseController
{
	/*法令規章頁面*/
	public function regulation()
	{
		$login = new Logindate();;
		$starsenior = new Starsenior();
		$starcollege = new Starcollege();

		$data = 
		[
			'starcollege' => $starcollege->findAll(),
			'starsenior' => $starsenior->findAll(),
			'logindate'=> $login->findAll(),
		];

		return view('show/star_regulation',$data);
	}

	/*重要時程頁面*/
	public function schedule()
	{
		$login = new Logindate();;
		$starsenior = new Starsenior();
		$starcollege = new Starcollege();

		$data = 
		[
			'starcollege' => $starcollege->findAll(),
			'starsenior' => $starsenior->findAll(),
			'logindate'=> $login->findAll(),
		];

		return view('show/star_schedule',$data);
	}

	/*發售辦法頁面*/
	public function purchase1()
	{
		$login = new Logindate();;
		$starsenior = new Starsenior();
		$starcollege = new Starcollege();

		$data = 
		[
			'starcollege' => $starcollege->findAll(),
			'starsenior' => $starsenior->findAll(),
			'logindate'=> $login->findAll(),
		];

		return view('show/star_purchase1',$data);
	}

	/*網路購買簡章頁面*/
	public function purchase2()
	{
		$login = new Logindate();;
		$starsenior = new Starsenior();
		$starcollege = new Starcollege();

		$data = 
		[
			'starcollege' => $starcollege->findAll(),
			'starsenior' => $starsenior->findAll(),
			'logindate'=> $login->findAll(),
		];

		return view('show/star_purchase2',$data);
	}

	/*簡章總則頁面*/
	public function appform1()
	{
		$login = new Logindate();;
		$starsenior = new Starsenior();
		$starcollege = new Starcollege();

		$data = 
		[
			'starcollege' => $starcollege->findAll(),
			'starsenior' => $starsenior->findAll(),
			'logindate'=> $login->findAll(),
		];

		return view('show/star_appform1',$data);
	}

	/*簡章附錄頁面*/
	public function appform2()
	{
		$login = new Logindate();;
		$starsenior = new Starsenior();
		$starcollege = new Starcollege();

		$data = 
		[
			'starcollege' => $starcollege->findAll(),
			'starsenior' => $starsenior->findAll(),
			'logindate'=> $login->findAll(),
		];

		return view('show/star_appform2',$data);
	}

	/*校系分則查詢頁面*/
	public function query()
	{
		$login = new Logindate();;
		$starsenior = new Starsenior();
		$starcollege = new Starcollege();

		$data = 
		[
			'starcollege' => $starcollege->findAll(),
			'starsenior' => $starsenior->findAll(),
			'logindate'=> $login->findAll(),
		];

		return view('show/star_query',$data);
	}

	/*其他事項頁面*/
	public function appform3()
	{
		$login = new Logindate();;
		$starsenior = new Starsenior();
		$starcollege = new Starcollege();

		$data = 
		[
			'starcollege' => $starcollege->findAll(),
			'starsenior' => $starsenior->findAll(),
			'logindate'=> $login->findAll(),
		];

		return view('show/star_appform3',$data);
	}

	/*簡章修正事項頁面*/
	public function appform4()
	{
		$login = new Logindate();;
		$starsenior = new Starsenior();
		$starcollege = new Starcollege();

		$data = 
		[
			'starcollege' => $starcollege->findAll(),
			'starsenior' => $starsenior->findAll(),
			'logindate'=> $login->findAll(),
		];

		return view('show/star_appform4',$data);
	}

	/*統計資料頁面*/
	public function statis()
	{
		$login = new Logindate();;
		$starsenior = new Starsenior();
		$starcollege = new Starcollege();

		$data = 
		[
			'starcollege' => $starcollege->findAll(),
			'starsenior' => $starsenior->findAll(),
			'logindate'=> $login->findAll(),
		];

		return view('show/star_statis',$data);
	}

	/*資料表件下載頁面*/
	public function download1()
	{
		$login = new Logindate();;
		$starsenior = new Starsenior();
		$starcollege = new Starcollege();

		$data = 
		[
			'starcollege' => $starcollege->findAll(),
			'starsenior' => $starsenior->findAll(),
			'logindate'=> $login->findAll(),
		];

		return view('show/star_download1',$data);
	}

	/*其他事項下載頁面*/
	public function download2()
	{
		$login = new Logindate();;
		$starsenior = new Starsenior();
		$starcollege = new Starcollege();

		$data = 
		[
			'starcollege' => $starcollege->findAll(),
			'starsenior' => $starsenior->findAll(),
			'logindate'=> $login->findAll(),
		];

		return view('show/star_download2',$data);
	}

	/*招生單位頁面*/
	public function site1()
	{
		$login = new Logindate();;
		$starsenior = new Starsenior();
		$starcollege = new Starcollege();

		$data = 
		[
			'starcollege' => $starcollege->findAll(),
			'starsenior' => $starsenior->findAll(),
			'logindate'=> $login->findAll(),
		];

		return view('show/star_site1',$data);
	}

	/*考試單位頁面*/
	public function site2()
	{
		$login = new Logindate();;
		$starsenior = new Starsenior();
		$starcollege = new Starcollege();

		$data = 
		[
			'starcollege' => $starcollege->findAll(),
			'starsenior' => $starsenior->findAll(),
			'logindate'=> $login->findAll(),
		];

		return view('show/star_site2',$data);
	}

	/*其他網站頁面*/
	public function site3()
	{
		$login = new Logindate();;
		$starsenior = new Starsenior();
		$starcollege = new Starcollege();

		$data = 
		[
			'starcollege' => $starcollege->findAll(),
			'starsenior' => $starsenior->findAll(),
			'logindate'=> $login->findAll(),
		];

		return view('show/star_site3',$data);
	}

	/*歷年資料頁面*/
	public function history()
	{
		$login = new Logindate();;
		$starsenior = new Starsenior();
		$starcollege = new Starcollege();

		$data = 
		[
			'starcollege' => $starcollege->findAll(),
			'starsenior' => $starsenior->findAll(),
			'logindate'=> $login->findAll(),
		];

		return view('show/star_history',$data);
	}

	/*聽障生免英聽檢定頁面*/
	public function freetelc()
	{
		$login = new Logindate();;
		$starsenior = new Starsenior();
		$starcollege = new Starcollege();

		$data = 
		[
			'starcollege' => $starcollege->findAll(),
			'starsenior' => $starsenior->findAll(),
			'logindate'=> $login->findAll(),
		];

		return view('show/star_freetelc',$data);
	}

	/*錄取(篩選)結果查詢頁面*/
	public function dispense()
	{
		$login = new Logindate();;
		$starsenior = new Starsenior();
		$starcollege = new Starcollege();

		$data = 
		[
			'starcollege' => $starcollege->findAll(),
			'starsenior' => $starsenior->findAll(),
			'logindate'=> $login->findAll(),
		];

		return view('show/star_dispense',$data);
	}

	/*網路聲明放棄頁面*/
	public function abandon()
	{
		$login = new Logindate();;
		$starsenior = new Starsenior();
		$starcollege = new Starcollege();

		$data = 
		[
			'starcollege' => $starcollege->findAll(),
			'starsenior' => $starsenior->findAll(),
			'logindate'=> $login->findAll(),
		];

		return view('show/star_abandon',$data);
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
			return redirect('viewController/show_back');
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
		return redirect('viewController/show_back');
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
			return redirect('viewController/show_back');
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
		return redirect('viewController/show_back');
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

		return redirect('viewController/show_back');
	}

	/*大學繁星相關連結調整開放日期頁面*/
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

	/*高中繁星相關連結調整開放日期頁面*/
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

	/*儲存大學繁星連結開放之相關資料*/
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
		return redirect('starController/starcollegeview');
	}

	/*儲存高中繁星連結開放之相關資料*/
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
		return redirect('starController/starseniorview');	
	}
}
?>